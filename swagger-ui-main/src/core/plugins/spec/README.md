<!-- local-learning-guide -->

# src/core/plugins/spec: local learning guide

[Source checkout guide](../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/spec` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [actions.js](actions.js) | Exports: `UPDATE_SPEC`, `UPDATE_URL`, `UPDATE_JSON`, `UPDATE_PARAM`, `UPDATE_EMPTY_PARAM_INCLUSION`, `VALIDATE_PARAMS`, `SET_RESPONSE`, `SET_REQUEST`, `SET_MUTATED_REQUEST`, `LOG_REQUEST`, `CLEAR_RESPONSE`, `CLEAR_REQUEST`, `CLEAR_VALIDATE_PARAMS`, `UPDATE_OPERATION_META_VALUE`, `UPDATE_RESOLVED`, `UPDATE_RESOLVED_SUBTREE`, `SET_SCHEME`, `updateSpec`, `updateResolved`, `updateUrl`, `updateJsonSpec`, `parseToJson`, `resolveSpec`, `requestResolvedSubtree`, `changeParam`, `changeParamByIdentity`, `updateResolvedSubtree`, `invalidateResolvedSubtreeCache`, `validateParams`, `updateEmptyParamInclusion`, `clearValidateParams`, `changeConsumesValue`, `changeProducesValue`, `setResponse`, `setRequest`, `setMutatedRequest`, `logRequest`, `executeRequest`, `execute`, `clearResponse`, `clearRequest`, `setScheme`. Imports: `js-yaml`, `immutable`, `url-parse`, `lodash/isString`, `lodash/debounce`, `lodash/set`, `lodash/fp/assocPath`, `lodash/constant`, `core/utils`. Trace dispatched actions to matching reducers and consumers. |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `./reducers`, `./actions`, `./selectors`, `./wrap-actions`. |
| [reducers.js](reducers.js) | Module implementation. Provides a default export. Imports: `immutable`, `core/utils`, `core/window`, `./selectors`, `./actions`. Trace action types to resulting state updates. |
| [selectors.js](selectors.js) | Exports: `lastError`, `url`, `specStr`, `specSource`, `specJson`, `specJS`, `specResolved`, `specResolvedSubtree`, `specJsonWithResolvedSubtrees`, `spec`, `isOAS3`, `info`, `externalDocs`, `version`, `semver`, `paths`, `validOperationMethods`, `operations`, `consumes`, `produces`, `security`, `securityDefinitions`, `findDefinition`, `definitions`, `basePath`, `host`, `schemes`, `operationsWithRootInherited`, `tags`, `tagDetails`, `operationsWithTags`, `taggedOperations`, `responses`, `requests`, `mutatedRequests`, `responseFor`, `requestFor`, `mutatedRequestFor`, `allowTryItOutFor`, `parameterWithMetaByIdentity`, `parameterInclusionSettingFor`, `parameterWithMeta`, `operationWithMeta`, `getParameter`, `hasHost`, `parameterValues`, `parametersIncludeIn`, `parametersIncludeType`, `contentTypeValues`, `currentProducesFor`, `producesOptionsFor`, `consumesOptionsFor`, `operationScheme`, `canExecuteScheme`, `validationErrors`, `validateBeforeExecute`, `getOAS3RequiredRequestBodyContentType`, `isMediaTypeSchemaPropertiesEqual`. Imports: `reselect`, `lodash/constant`, `core/utils`, `immutable`. Trace selected state to its UI or action consumer. |
| [wrap-actions.js](wrap-actions.js) | Exports: `updateSpec`, `updateJsonSpec`, `executeRequest`, `validateParams`. Imports: `lodash/get`, `lodash/isPlainObject`. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
