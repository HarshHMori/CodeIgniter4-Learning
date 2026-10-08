<!-- local-learning-guide -->

# src/core: local learning guide

[Source checkout guide](../../README.md) · [Parent guide](../README.md)

## What this folder does

Core initialization builds the configurable UI system from presets and plugins. Read index.js and system.js before tracing component or plugin calls.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `./system`, `./presets/base`, `./presets/apis`, `./plugins/accessibility`, `./plugins/auth/`, `./plugins/configs`, `./plugins/deep-linking`, `./plugins/err`, `./plugins/filter`, `./plugins/icons`, `./plugins/json-schema-5`, `./plugins/json-schema-2020-12`, `./plugins/json-schema-2020-12-samples`, `./plugins/layout`, `./plugins/logs`, `./plugins/oas3`, `./plugins/on-complete`, `./plugins/request-snippets`, `./plugins/json-schema-5-samples`, `./plugins/spec`, `./plugins/swagger-client`, `./plugins/util`, `./plugins/view`, `core/plugins/view-legacy`, `./plugins/download-url`, `core/plugins/syntax-highlighting`, `core/plugins/versions`, `./plugins/safe-render`, `./config`. |
| [oauth2-authorize.js](oauth2-authorize.js) | Module implementation. Provides a default export. Imports: `url-parse`, `immutable`, `core/utils`, `core/utils/url`. |
| [system.js](system.js) | Module implementation. Provides a default export. Imports: `react`, `redux`, `immutable`, `deep-extend`, `core/utils/combine-reducers`, `serialize-error`, `lodash/merge`, `core/plugins/err/actions`, `core/window`, `core/utils`. |
| [window.js](window.js) | Module implementation. Provides a default export. |

## Child folders

- [assets/](assets/README.md)
- [components/](components/README.md)
- [config/](config/README.md)
- [containers/](containers/README.md)
- [plugins/](plugins/README.md)
- [presets/](presets/README.md)
- [utils/](utils/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
