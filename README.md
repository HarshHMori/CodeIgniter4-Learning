<!-- local-learning-guide -->

# CodeIgniter learning workspace: start-to-finish roadmap

This workspace contains eight independent CodeIgniter applications, a static Swagger viewer, and a full Swagger UI source checkout. Each project has its own setup, configuration, dependencies, and database. Open the project README first, then follow its child README links alongside the source.

## Recommended learning order

| Order | Folder | What you learn |
| --- | --- | --- |
| 1 | [manual-download](manual-download/README.md) | Manual framework layout and the first route/controller/view request |
| 2 | [composer-download](composer-download/README.md) | Composer setup, routing, CRUD/query builder, joins, models/entities, forms/helpers, sessions/services |
| 3 | [test_project](test_project/README.md) | Small URL shortener practice exercise |
| 4 | [url-shortener](url-shortener/README.md) | Short links, redirects, opened tracking, and browser interaction |
| 5 | [ci4-basics-apis](ci4-basics-apis/README.md) | Student CRUD, form versus JSON input, responses |
| 6 | [ci4-apis-basic-auth](ci4-apis-basic-auth/README.md) | Protected product CRUD and multipart image uploads |
| 7 | [ci4-apis-jwt](ci4-apis-jwt/README.md) | Password hashes, bearer JWTs, ownership, logout blocklist |
| 8 | [ci4_apis_shield](ci4_apis_shield/README.md) | Shield identities/access tokens, projects, OpenAPI generation |
| 9 | [swagger-doc](swagger-doc/README.md) | Static API docs, specification URLs, Try it out, CORS |
| 10 | [swagger-ui-main](swagger-ui-main/README.md) | Viewer source, plugins/components, builds and checks |

## Before the first lesson

Learn basic PHP arrays/classes/namespaces, HTML forms, HTTP methods, and SQL tables/keys. Install PHP matching the checked-in Composer constraints (the applications require ^8.2), Composer, and MySQL/MariaDB for database lessons. Enable intl, mbstring, and mysqli. Node/npm is needed only for the full Swagger UI source workflow.

Open a terminal in the chosen project root, install its dependencies, preserve any existing .env, and configure its own database as shown in that project's guide. Start one backend at a time on port 8080, or give each a distinct port and matching base URL. Use curl.exe explicitly in Windows PowerShell for curl examples; Postman and Invoke-RestMethod are alternatives.

## How to learn each folder completely

1. Read its purpose and the implemented workflow before running commands.
2. Follow a route into the filter (when attached), controller, database model/query, and view or JSON response.
3. Read migrations before applying them and compare exact table/field names with source.
4. Complete the happy path, inspect the stored state, and then try invalid input or missing records.
5. Explain the result and reproduce the flow with a small variation.
6. Review the project's existing issues and distinguish intended behavior from what the current code actually does.

These are teaching projects with unfinished experiments. The guides identify concrete schema, parsing, and authentication issues instead of treating every example as a completed production feature. Existing project and upstream README content has been retained; the added local learning guide follows a divider where a README already existed.

## Documentation coverage

README guides cover every top-level project and visible application, public, test, runtime, and Swagger source/tooling subfolder. Composer vendor trees and the bundled manual framework system have boundary guides; their nested third-party internals retain supplied documentation. Hidden Git/editor/tool metadata and node_modules are excluded. Runtime logs, sessions, debug snapshots, environment files, and credentials are not reproduced in these guides.

The original [project creation notes](steps-to-create-project.txt) provide a brief reminder; use the project-specific guides for the complete setup and correct current controller names. Commands and endpoint descriptions are based on the checked-in source. Walkthroughs should be verified locally with the configured services; starter tests do not cover every custom feature.
