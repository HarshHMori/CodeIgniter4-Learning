<!-- local-learning-guide -->

# src/core/plugins/json-schema-2020-12-samples/fn: local learning guide

[Source checkout guide](../../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/json-schema-2020-12-samples/fn` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [get-json-sample-schema.js](get-json-sample-schema.js) | Module implementation. Provides a default export. Imports: `lodash/some`. |
| [get-sample-schema.js](get-sample-schema.js) | Module implementation. Provides a default export. |
| [get-xml-sample-schema.js](get-xml-sample-schema.js) | Module implementation. Provides a default export. |
| [get-yaml-sample-schema.js](get-yaml-sample-schema.js) | Module implementation. Provides a default export. Imports: `js-yaml`. |
| [index.js](index.js) | Module implementation. Imports: `./main`, `./api/optionAPI`, `./api/encoderAPI`, `./api/formatAPI`, `./api/mediaTypeAPI`, `./core/merge`, `./core/type`. |
| [main.js](main.js) | Exports: `sampleFromSchemaGeneric`, `createXMLExample`, `sampleFromSchema`, `memoizedCreateXMLExample`, `memoizedSampleFromSchema`. Imports: `xml`, `lodash/isEmpty`, `lodash/isPlainObject`, `core/utils`, `core/utils/memoizeN`, `./types/index`, `./core/type`, `./core/utils`, `./core/example`, `./core/random`, `./core/merge`, `./core/predicates`. |

## Child folders

- [api/](api/README.md)
- [class/](class/README.md)
- [core/](core/README.md)
- [encoders/](encoders/README.md)
- [generators/](generators/README.md)
- [types/](types/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
