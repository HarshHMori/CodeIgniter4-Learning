# Swagger UI Dist
[![NPM version](https://badge.fury.io/js/swagger-ui-dist.svg)](http://badge.fury.io/js/swagger-ui-dist)

## Anonymized analytics

SwaggerUI Dist uses [Scarf](https://scarf.sh/) to collect [anonymized installation analytics](https://github.com/scarf-sh/scarf-js?tab=readme-ov-file#as-a-user-of-a-package-using-scarf-js-what-information-does-scarf-js-send-about-me). These analytics help support the maintainers of this library and ONLY run during installation. To [opt out](https://github.com/scarf-sh/scarf-js?tab=readme-ov-file#as-a-user-of-a-package-using-scarf-js-how-can-i-opt-out-of-analytics), you can set the `scarfSettings.enabled` field to `false` in your project's `package.json`:

```
// package.json
{
  // ...
  "scarfSettings": {
    "enabled": false
  }
  // ...
}
```

Alternatively, you can set the environment variable `SCARF_ANALYTICS` to `false` as part of the environment that installs your npm packages, e.g., `SCARF_ANALYTICS=false npm install`.


# API

This module, `swagger-ui-dist`, exposes Swagger-UI's entire dist folder as a dependency-free npm module.
Use `swagger-ui` instead, if you'd like to have npm install dependencies for you.

`SwaggerUIBundle` and `SwaggerUIStandalonePreset` can be imported:
```javascript
  import { SwaggerUIBundle, SwaggerUIStandalonePreset } from "swagger-ui-dist"
```

To get an absolute path to this directory for static file serving, use the exported `getAbsoluteFSPath` method:

```javascript
const swaggerUiAssetPath = require("swagger-ui-dist").getAbsoluteFSPath()

// then instantiate server that serves files from the swaggerUiAssetPath
```

For anything else, check the [Swagger-UI](https://github.com/swagger-api/swagger-ui) repository.

---

<!-- local-learning-guide -->

# swagger-ui-dist-package: local learning guide

[Source checkout guide](../README.md) · [Parent guide](../README.md)

## What this folder does

This wrapper packages already-built distribution files and exposes entry/path helpers. It is separate from the full source development workflow.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [absolute-path.js](absolute-path.js) | Module implementation. |
| [deploy.sh](deploy.sh) | Supporting asset; follow its import or configuration reference. |
| [index.js](index.js) | Module implementation. |
| [package.json](package.json) | Structured configuration/metadata; inspect the script that reads it. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
