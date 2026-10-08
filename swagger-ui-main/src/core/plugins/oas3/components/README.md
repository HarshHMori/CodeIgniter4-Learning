<!-- local-learning-guide -->

# src/core/plugins/oas3/components: local learning guide

[Source checkout guide](../../../../../README.md) · [Parent guide](../README.md)

## What this folder does

React components render the API interface. Trace props and system selectors/actions into the component before changing presentation.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [callbacks.jsx](callbacks.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`. |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `./callbacks`, `./request-body`, `./operation-link`, `./servers`, `./servers-container`, `./request-body-editor`, `./auth/http-auth`, `./operation-servers`. |
| [operation-link.jsx](operation-link.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`. |
| [operation-servers.jsx](operation-servers.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`. |
| [request-body-editor.jsx](request-body-editor.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `classnames`, `core/utils`. |
| [request-body.jsx](request-body.jsx) | Exports: `getDefaultRequestBodyValue`. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `immutable`, `core/utils`, `core/utils/jsonParse`. |
| [servers-container.jsx](servers-container.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [servers.jsx](servers.jsx) | Module implementation. Provides a default export. Imports: `react`, `immutable`, `prop-types`, `react-immutable-proptypes`. |

## Child folders

- [auth/](auth/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
