# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

---

<!-- local-learning-guide -->

# URL shortener practice exercise

Build and trace a basic URL shortener with a form, query builder, database lookup, and redirect.

[Workspace learning path](../README.md)

## Setup from the beginning

Run these commands from this project's root, where `spark` and `composer.json` live. Each folder is an independent application; installing or migrating one does not configure the others.

1. Install PHP compatible with `composer.json` (`^8.2` here), Composer, and MySQL/MariaDB for the database exercises. Enable `intl`, `mbstring`, and `mysqli`; some helper lessons also need `curl` or `fileinfo`.
2. Check `php --version`, `php -m`, and `composer --version`, then run:

```powershell
composer install
composer check-platform-reqs
```

3. Keep an existing `.env`. If absent, copy `env` when available or create `.env` in this project root. Most app starters here no longer have an `env` template. Use these example settings with your actual local credentials:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
database.default.hostname = localhost
database.default.database = 'ci4_shortener_practice'
database.default.username = 'YOUR_LOCAL_DB_USER'
database.default.password = 'YOUR_LOCAL_DB_PASSWORD'
database.default.DBDriver = MySQLi
database.default.port = 3306
```

4. Create an empty database in your MySQL client:

```sql
CREATE DATABASE ci4_shortener_practice CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
```

5. Read the application migrations and project-specific instructions below before running `php spark migrate`. Shield has an additional migration order; the manual welcome-page example does not require a database.
6. Run `php spark routes` to inspect route methods and handlers, then `php spark serve`. Visit `http://localhost:8080/` or the lesson path below. Stop with Ctrl+C. For a second application use another port and update its base URL.

These settings are examples, not a copy of private local configuration. With Apache or Nginx, use `public/` as the document root.

## How a request travels through this folder

```text
Browser/API client -> public/index.php -> framework bootstrap
                   -> Config/Routes.php -> before filter (if attached)
                   -> controller -> model or query builder -> database
                   -> view/JSON/redirect -> client
```

Routes choose the controller method. Filters can stop a request before it reaches that method. Controllers read inputs and coordinate the response. Models define permitted fields and table operations; some examples use `db_connect()->table()` directly. Views render HTML, while ResourceController methods return JSON. Migrations define database structure and run separately from ordinary requests.

## Learn the implemented workflow from start to finish


1. Read `app/Database/Migrations/2026-09-03-160840_TestUrl.php`: `urls` contains `id`, `long_url` (150 characters), and `shortcode` (six characters).
2. Open `/shortener`. GET displays `app/Views/shortener.php` with empty result variables.
3. Submit the form field `long_url` with `https://example.com/learning`.
4. Follow `URLShortener::testShorteners()`: it generates a code, inserts the mapping, and renders the result.
5. Read `generateShortcode()`: letters and digits are shuffled and the first six are taken. No database collision check is implemented.
6. Open `/{shortcode}` and follow `handelLongURL()`: it selects `long_url` and returns a redirect.
7. Try an unknown code. The controller returns an encoded JSON string with `status: false` and `message: URL not found`.
8. Compare this folder with `../url-shortener`: the larger example adds an opened flag, creation time, and a richer interface.

The root `/` remains the welcome page. The final `(:segment)` route catches unknown single-segment paths as possible codes. The application does not validate URL schemes on the server or enforce unique short codes; the exercise is to add both. Use short test URLs because the schema limits the destination to 150 characters.

## Folder map

- [app/](app/README.md): This is the project-specific MVC layer. Start with Config/Routes.php, follow a handler into Controllers, then inspect its database access and output.
- [public/](public/README.md): index.php is the HTTP front controller. This folder is the intended web document root; files here can be requested directly. CSS, scripts, images, and uploaded files belong here only when they are intended to be public.
- [tests/](tests/README.md): These folders contain starter unit, session, and database examples plus reusable support classes. phpunit.dist.xml selects bootstrap and suites. Their presence does not prove custom API or form behavior is covered.
- [vendor/](vendor/README.md): Composer-managed dependencies; installed library documentation stays with each package.
- [writable/](writable/README.md): The framework stores generated cache, sessions, logs, debug data, and application-managed uploads under writable. These are runtime artifacts, not source lessons; keep this directory outside the public document root.

## Verify your learning

1. Complete a successful request and explain the route, input reader, query, and output without looking at the guide.
2. Inspect the database before and after a write. Use the returned or stored ID rather than assuming it is always `1`.
3. Try missing input, unknown IDs/codes, and duplicate input where applicable. For authenticated apps also try absent and invalid credentials.
4. Compare the HTTP status with the response body. These teaching examples do not always use conventional REST status codes.
5. Follow one change through every affected layer: field -> migration -> allowed fields -> validation -> form/API -> response.

## Tests and troubleshooting

Run `composer test` from the project root after installing development dependencies. Read `phpunit.dist.xml` and `tests/README.md` first: the checked-in unit, session, and database examples are starter tests, not complete feature coverage for this application's custom workflows. Use a separate test database and check the active `tests` connection before database tests.

| Symptom | What to inspect |
| --- | --- |
| PHP extension or version error | `php -m`, the PHP used in your terminal, and `composer check-platform-reqs` |
| Missing autoloader/framework | Run `composer install`; inspect `app/Config/Paths.php` |
| Database connection fails | MySQL service, database existence, `.env` host/port/credentials |
| Table or column missing | Migration status, model table/fields, and project-specific issues above |
| 404 or wrong handler | `php spark routes`, HTTP method, route spelling/order, `public/` document root |
| Form fields missing | `getPost()` versus JSON input, field names, and Content-Type |
| Protected route rejected | Authorization scheme, token/credentials, filter alias, and server forwarding of the header |
| Session/flashdata missing | Same browser/cookie jar; flashdata is temporary |
| Styles or short links point elsewhere | `app.baseURL`, chosen server port, and public asset paths |
| Permission failure | Runtime write access to `writable/`; upload lessons also need `public/uploads/` |

Read `writable/logs` locally for errors and avoid exposing those files through the web server. Before publishing an exercise, implement the validation, authentication, and schema fixes identified above and use a production environment with HTTPS.
