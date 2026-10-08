<!-- local-learning-guide -->

# src/core/plugins/json-schema-5/components: local learning guide

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
| [array-model.jsx](array-model.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `core/utils/url`. |
| [enum-model.jsx](enum-model.jsx) | Module implementation. Provides a default export. Imports: `react`, `react-immutable-proptypes`. |
| [json-schema-components.jsx](json-schema-components.jsx) | Exports: `JsonSchemaForm`, `JsonSchema_string`, `JsonSchema_array`, `JsonSchemaArrayItemText`, `JsonSchemaArrayItemFile`, `JsonSchema_boolean`, `JsonSchema_object`. Imports: `react`, `prop-types`, `immutable`, `classnames`, `react-immutable-proptypes`, `react-debounce-input`, `core/utils`. |
| [model-collapse.jsx](model-collapse.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `immutable`. |
| [model-example.jsx](model-example.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `classnames`, `randombytes`, `core/utils`. |
| [model-extensions.jsx](model-extensions.jsx) | Exports: `ModelExtensions`. Imports: `react`, `prop-types`, `core/utils`, `react-immutable-proptypes`. |
| [model-item.tsx](model-item.tsx) | Module implementation. Provides a default export. Imports: `react`, `immutable`. |
| [model-wrapper.jsx](model-wrapper.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`. |
| [model.jsx](model.jsx) | Module implementation. Provides a default export. Imports: `react`, `react-immutable-pure-component`, `react-immutable-proptypes`, `prop-types`, `immutable`, `core/assets/rolling-load.svg`. |
| [models.jsx](models.jsx) | Module implementation. Provides a default export. Imports: `react`, `immutable`, `prop-types`, `@tanstack/react-virtual`, `core/utils/virtualization`, `./model-item`. |
| [object-model.jsx](object-model.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`, `react-immutable-proptypes`, `core/utils/url`, `classnames`, `../../../utils`. |
| [primitive-model.jsx](primitive-model.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `core/utils`, `core/utils/url`. |
| [schemes.jsx](schemes.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
