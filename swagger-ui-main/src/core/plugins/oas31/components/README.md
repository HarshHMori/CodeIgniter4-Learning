<!-- local-learning-guide -->

# src/core/plugins/oas31/components: local learning guide

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
| [_all.scss](_all.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [contact.jsx](contact.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `core/utils/url`. |
| [info.jsx](info.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `core/utils/url`. |
| [json-schema-dialect.jsx](json-schema-dialect.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `core/utils/url`. |
| [license.jsx](license.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `core/utils/url`. |
| [version-pragma-filter.jsx](version-pragma-filter.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [webhooks.jsx](webhooks.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`. |

## Child folders

- [auth/](auth/README.md)
- [model/](model/README.md)
- [models/](models/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
