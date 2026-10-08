<!-- local-learning-guide -->

# webpack: local learning guide

[Source checkout guide](../README.md) · [Parent guide](../README.md)

## What this folder does

Webpack files define development and production entry points, bundle variants, and output settings. package.json scripts select these files.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [_config-builder.js](_config-builder.js) | Module implementation. |
| [_helpers.js](_helpers.js) | Module implementation. |
| [bundle.js](bundle.js) | Module implementation. Imports: `path`, `webpack-stats-plugin`. |
| [core.js](core.js) | Module implementation. |
| [dev-e2e.js](dev-e2e.js) | Module implementation. |
| [dev.js](dev.js) | Module implementation. |
| [es-bundle-core.js](es-bundle-core.js) | Module implementation. |
| [es-bundle.js](es-bundle.js) | Module implementation. Imports: `path`, `webpack-stats-plugin`. |
| [standalone.js](standalone.js) | Module implementation. |
| [stylesheets.js](stylesheets.js) | Module implementation. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
