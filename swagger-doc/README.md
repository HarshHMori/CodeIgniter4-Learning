<!-- local-learning-guide -->

# Static Swagger UI and the local API specification

This folder contains ready-to-serve Swagger UI browser assets and a local `swagger.json` describing the Shield authentication API. It is a static documentation viewer, not a PHP backend.

[Workspace learning path](../README.md) · [Shield API walkthrough](../ci4_apis_shield/README.md)

## Start and inspect

1. Open `swagger.json`: it declares OpenAPI 3.0.0, the local server `http://localhost:8080/`, and authentication paths. Compare those paths with `ci4_apis_shield/app/Config/Routes.php`.
2. Read `index.html`: it loads CSS, the UI bundle, the standalone preset, and `swagger-initializer.js`.
3. Read the initializer carefully: its current `url` points to the public Petstore specification, so the page currently displays Petstore even though a local Shield JSON file exists.
4. To point it at the local document as a learning exercise, change the initializer setting to `url: './swagger.json'`, then refresh the page. That setting has not been changed by this documentation update.
5. Serve this folder over HTTP rather than opening index.html through file://. From this folder run:

```powershell
php -S localhost:8081 -t .
```

Open `http://localhost:8081/`. Keep the backend on port 8080. Inspect browser Network requests to confirm which JSON URL loads.

## Files and responsibilities

| File/group | Responsibility |
| --- | --- |
| `swagger.json` | Local API contract: paths, schemas, responses, bearer security |
| `swagger-initializer.js` | Chooses the document URL and UI configuration |
| `index.html`, `index.css`, `swagger-ui.css` | Viewer entry point and presentation |
| `swagger-ui-bundle.js`, `swagger-ui-standalone-preset.js` | Prebuilt runtime and standalone layout |
| Other `swagger-ui*.js` / source maps | Alternate bundles and debugging/build artifacts |
| `oauth2-redirect.html`, `oauth2-redirect.js` | OAuth redirect support; not the Shield login controller |

## Follow the API from documentation to execution

1. Start and configure the Shield project using its README, including the two-stage migrations and listed authenticator issues.
2. Compare registration/login request schemas with the controller's actual fields and input parsing.
3. Register/login and copy the returned raw token. Use the Swagger UI Authorize control for the declared bearer scheme if available.
4. Call profile and compare documented versus actual HTTP status/body. OpenAPI is a contract; it does not implement validation or authorization.
5. Generate a fresh document through the backend `/swagger-json-doc` route. It writes the backend `public/swagger.json` and returns a download; it does not automatically copy that file here.
6. Copy the reviewed generated document into this folder when intentionally updating documentation. Compare paths first: project operations have no annotations and may be absent.

## Troubleshooting and learning checks

- Petstore appears: the initializer still references Petstore, or browser caching serves the previous initializer.
- Specification does not load: inspect the JSON URL, HTTP status, and JSON syntax in browser Network tools.
- Try it out fails across ports: 8081 and 8080 are different origins; inspect and configure the backend's CORS policy for the local viewer origin, Authorization header, and required methods.
- Unauthorized response: compare token format and filter behavior with the backend README.
- An endpoint is missing: compare actual routes with generated annotations; the viewer displays only the specification it loads.

Finish by explaining the distinction between the OpenAPI JSON, the UI assets, and the PHP application that handles each request.
