<!-- local-learning-guide -->

# src/core/plugins/oas3: local learning guide

[Source checkout guide](../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/oas3` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [actions.js](actions.js) | Exports: `UPDATE_SELECTED_SERVER`, `UPDATE_REQUEST_BODY_VALUE`, `UPDATE_REQUEST_BODY_VALUE_RETAIN_FLAG`, `UPDATE_REQUEST_BODY_INCLUSION`, `UPDATE_ACTIVE_EXAMPLES_MEMBER`, `UPDATE_REQUEST_CONTENT_TYPE`, `UPDATE_RESPONSE_CONTENT_TYPE`, `UPDATE_RESPONSE_CODE_CONTENT_TYPE`, `UPDATE_SERVER_VARIABLE_VALUE`, `SET_REQUEST_BODY_VALIDATE_ERROR`, `CLEAR_REQUEST_BODY_VALIDATE_ERROR`, `CLEAR_REQUEST_BODY_VALUE`, `setSelectedServer`, `setRequestBodyValue`, `setRetainRequestBodyValueFlag`, `setRequestBodyInclusion`, `setActiveExamplesMember`, `setRequestContentType`, `setResponseContentType`, `setResponseCodeContentType`, `setServerVariableValue`, `setRequestBodyValidateError`, `clearRequestBodyValidateError`, `initRequestBodyValidateError`, `clearRequestBodyValue`. Trace dispatched actions to matching reducers and consumers. |
| [fn.js](fn.js) | Exports: `makeIsFileUploadIntended`. Imports: `immutable`, `lodash/isPlainObject`. |
| [helpers.jsx](helpers.jsx) | Exports: `isOAS30`, `isSwagger2`, `OAS3ComponentWrapFactory`, `OAS30ComponentWrapFactory`. Imports: `react`. |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `./spec-extensions/wrap-selectors`, `./auth-extensions/wrap-selectors`, `./spec-extensions/selectors`, `./components`, `./wrap-components`, `./actions`, `./selectors`, `./reducers`, `./fn`. |
| [reducers.js](reducers.js) | Module implementation. Provides a default export. Imports: `immutable`, `./actions`. Trace action types to resulting state updates. |
| [selectors.js](selectors.js) | Exports: `selectedServer`, `requestBodyValue`, `shouldRetainRequestBodyValue`, `selectDefaultRequestBodyValue`, `hasUserEditedBody`, `requestBodyInclusionSetting`, `requestBodyErrors`, `activeExamplesMember`, `requestContentType`, `responseContentType`, `responseCodeContentType`, `serverVariableValue`, `serverVariables`, `serverEffectiveValue`, `validateBeforeExecute`, `validateShallowRequired`, `validOperationMethods`. Imports: `immutable`, `lodash/escapeRegExp`, `lodash/constant`, `./components/request-body`, `core/utils`. Trace selected state to its UI or action consumer. |

## Child folders

- [auth-extensions/](auth-extensions/README.md)
- [components/](components/README.md)
- [spec-extensions/](spec-extensions/README.md)
- [wrap-components/](wrap-components/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
