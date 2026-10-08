<!-- local-learning-guide -->

# src/core/utils: local learning guide

[Source checkout guide](../../../README.md) · [Parent guide](../README.md)

## What this folder does

Utility modules are shared by UI/plugin code. Trace imports, inputs, and return values rather than assuming they are standalone endpoints.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [combine-reducers.ts](combine-reducers.ts) | Exports: `combineReducers`. Imports: `immutable`. |
| [create-html-ready-id.js](create-html-ready-id.js) | Module implementation. Provides a default export. |
| [get-parameter-schema.js](get-parameter-schema.js) | Module implementation. Provides a default export. Imports: `immutable`. |
| [index.js](index.js) | Exports: `immutableToJS`, `objectify`, `arrayify`, `fromJSOrdered`, `createObjWithHashedKeys`, `bindToState`, `normalizeArray`, `isFn`, `isObject`, `isFunc`, `isArray`, `memoize`, `objMap`, `objReduce`, `systemThunkMiddleware`, `defaultStatusCode`, `getList`, `mapToList`, `extractFileNameFromContentDispositionHeader`, `pascalCase`, `pascalCaseFilename`, `propChecker`, `validateMaximum`, `validateMinimum`, `validateNumber`, `validateInteger`, `validateFile`, `validateBoolean`, `validateString`, `validateDateTime`, `validateGuid`, `validateMaxLength`, `validateUniqueItems`, `validateMinItems`, `validateMaxItems`, `validateMinLength`, `validatePattern`, `validateParam`, `parseSearch`, `serializeSearch`, `btoa`, `sorters`, `buildFormData`, `shallowEqualKeys`, `requiresValidationURL`, `getAcceptControllingResponse`, `createDeepLinkPath`, `escapeDeepLinkPath`, `isExtension`, `getExtensions`, `getCommonExtensions`, `deeplyStripKey`, `stringify`, `numberToString`, `paramToIdentifier`, `paramToValue`, `generateCodeVerifier`, `createCodeChallenge`, `isEmptyValue`. Imports: `immutable`, `lodash/camelCase`, `lodash/upperFirst`, `lodash/memoize`, `lodash/find`, `lodash/some`, `lodash/eq`, `lodash/isFunction`, `css.escape`, `randombytes`, `sha.js`, `core/window`, `core/utils/get-parameter-schema`. |
| [jsonParse.js](jsonParse.js) | Exports: `canJsonParse`, `getKnownSyntaxHighlighterLanguage`. |
| [memoizeN.js](memoizeN.js) | Module implementation. Provides a default export. Imports: `lodash/memoize`. |
| [parse-parameter-array-value.js](parse-parameter-array-value.js) | Exports: `parseParameterArrayValue`. Imports: `immutable`. |
| [url.js](url.js) | Exports: `isAbsoluteUrl`, `addProtocol`, `buildBaseUrl`, `buildUrl`, `safeBuildUrl`, `sanitizeUrl`. |
| [virtualization.ts](virtualization.ts) | Exports: `VIRTUALIZE_MODELS_THRESHOLD`, `VIRTUALIZE_MODELS_ESTIMATE_SIZE`, `VIRTUALIZE_JSON_SCHEMA_2020_12_ESTIMATE_SIZE`, `VIRTUALIZE_MODELS_OVERSCAN`, `VIRTUALIZE_OPERATIONS_THRESHOLD`, `VIRTUALIZE_OPERATIONS_TAG_ESTIMATE_SIZE`, `VIRTUALIZE_OPERATIONS_ESTIMATE_SIZE`, `VIRTUALIZE_OPERATIONS_OVERSCAN`. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
