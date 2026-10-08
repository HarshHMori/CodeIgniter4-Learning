<!-- local-learning-guide -->

# src/core/components: local learning guide

[Source checkout guide](../../../README.md) · [Parent guide](../README.md)

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
| [app.jsx](app.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [clear.jsx](clear.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [contact.jsx](contact.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `core/utils/url`. |
| [content-type.jsx](content-type.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `immutable`. |
| [copy-to-clipboard-btn.tsx](copy-to-clipboard-btn.tsx) | Module implementation. Provides a default export. Imports: `react`, `react-copy-to-clipboard`. |
| [curl.jsx](curl.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-copy-to-clipboard`, `../plugins/request-snippets/fn`. |
| [debug.jsx](debug.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-inspector`. |
| [deep-link.jsx](deep-link.jsx) | Exports: `DeepLink`. Provides a default export. Imports: `react`, `prop-types`. |
| [errors.jsx](errors.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`. |
| [example.jsx](example.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `core/utils`, `immutable`. |
| [examples-select-value-retainer.jsx](examples-select-value-retainer.jsx) | Module implementation. Provides a default export. Imports: `react`, `immutable`, `prop-types`, `react-immutable-proptypes`, `core/utils`. |
| [examples-select.jsx](examples-select.jsx) | Module implementation. Provides a default export. Imports: `react`, `immutable`, `prop-types`, `react-immutable-proptypes`. |
| [execute.jsx](execute.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [footer.jsx](footer.jsx) | Module implementation. Provides a default export. Imports: `react`. |
| [headers.jsx](headers.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`. |
| [info.jsx](info.jsx) | Exports: `InfoBasePath`, `InfoUrl`. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `core/utils/url`. |
| [initialized-input.jsx](initialized-input.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [jump-to-path.jsx](jump-to-path.jsx) | Module implementation. Provides a default export. Imports: `react`. |
| [layout-utils.jsx](layout-utils.jsx) | Exports: `Container`, `Col`, `Row`, `Button`, `TextArea`, `Input`, `Select`, `Link`, `Collapse`. Imports: `react`, `prop-types`. |
| [license.jsx](license.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `core/utils/url`. |
| [live-response.jsx](live-response.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`. |
| [online-validator-badge.jsx](online-validator-badge.jsx) | Module implementation. Provides a default export. Imports: `react`, `url-parse`, `prop-types`, `core/utils`, `core/utils/url`, `core/window`. |
| [openapi-version.jsx](openapi-version.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [operation-extension-row.jsx](operation-extension-row.jsx) | Exports: `OperationExtRow`. Provides a default export. Imports: `react`, `prop-types`. |
| [operation-extensions.jsx](operation-extensions.jsx) | Exports: `OperationExt`. Provides a default export. Imports: `react`, `prop-types`. |
| [operation-summary-method.jsx](operation-summary-method.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`. |
| [operation-summary-path.jsx](operation-summary-path.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`, `core/utils`, `react-immutable-proptypes`. |
| [operation-summary.jsx](operation-summary.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`, `react-immutable-proptypes`, `lodash/toString`. |
| [operation-tag.jsx](operation-tag.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `immutable`, `core/utils`, `core/utils/url`. |
| [operation.jsx](operation.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `core/utils`, `core/utils/url`, `immutable`, `react-immutable-proptypes`, `core/assets/rolling-load.svg`. |
| [operations.jsx](operations.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `@tanstack/react-virtual`, `swagger-client/es/helpers`, `core/utils/virtualization`. |
| [overview.jsx](overview.jsx) | Exports: `OperationLink`. Provides a default export. Imports: `react`, `prop-types`, `core/components/layout-utils`. |
| [param-body.jsx](param-body.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `immutable`, `core/utils/jsonParse`, `core/utils/create-html-ready-id`. |
| [parameter-extension.jsx](parameter-extension.jsx) | Exports: `ParameterExt`. Provides a default export. Imports: `react`, `prop-types`. |
| [parameter-include-empty.jsx](parameter-include-empty.jsx) | Module implementation. Provides a default export. Imports: `react`, `classnames`, `prop-types`. |
| [parameter-row.jsx](parameter-row.jsx) | Module implementation. Provides a default export. Imports: `react`, `immutable`, `prop-types`, `react-immutable-proptypes`, `core/window`, `core/utils`, `core/utils/get-parameter-schema.js`, `core/utils/parse-parameter-array-value`. |
| [property.jsx](property.jsx) | Exports: `Property`. Provides a default export. Imports: `react`, `prop-types`, `core/utils`. |
| [response-body.jsx](response-body.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `xml-but-prettier`, `lodash/toLower`, `core/utils`, `core/utils/jsonParse`, `core/window`. |
| [response-extension.jsx](response-extension.jsx) | Exports: `ResponseExtension`. Provides a default export. Imports: `react`, `prop-types`. |
| [response.jsx](response.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `react-immutable-proptypes`, `classnames`, `immutable`, `core/utils`, `core/utils/jsonParse`. |
| [responses.jsx](responses.jsx) | Module implementation. Provides a default export. Imports: `react`, `immutable`, `prop-types`, `react-immutable-proptypes`, `core/utils`, `core/utils/create-html-ready-id`. |
| [svg-assets.jsx](svg-assets.jsx) | Module implementation. Provides a default export. Imports: `react`. |
| [system-wrapper.jsx](system-wrapper.jsx) | Module implementation. |
| [try-it-out-button.jsx](try-it-out-button.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [version-pragma-filter.jsx](version-pragma-filter.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |
| [version-stamp.jsx](version-stamp.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`. |

## Child folders

- [auth/](auth/README.md)
- [layouts/](layouts/README.md)
- [parameters/](parameters/README.md)
- [providers/](providers/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
