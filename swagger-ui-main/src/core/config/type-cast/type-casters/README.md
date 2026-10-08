<!-- local-learning-guide -->

# src/core/config/type-cast/type-casters: local learning guide

[Source checkout guide](../../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This source/tooling folder groups `src/core/config/type-cast/type-casters` behavior. Use its parent imports or configuration to identify the active entry point; it is not a PHP API endpoint.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [array.js](array.js) | Module implementation. Provides a default export. |
| [boolean.js](boolean.js) | Module implementation. Provides a default export. |
| [dom-node.js](dom-node.js) | Module implementation. Provides a default export. |
| [filter.js](filter.js) | Module implementation. Provides a default export. Imports: `./boolean`. |
| [function.js](function.js) | Module implementation. Provides a default export. |
| [nullable-array.js](nullable-array.js) | Module implementation. Provides a default export. |
| [nullable-function.js](nullable-function.js) | Module implementation. Provides a default export. |
| [nullable-string.js](nullable-string.js) | Module implementation. Provides a default export. |
| [number.js](number.js) | Module implementation. Provides a default export. |
| [object.js](object.js) | Module implementation. Provides a default export. Imports: `lodash/isPlainObject`. |
| [sorter.js](sorter.js) | Module implementation. Provides a default export. |
| [string.js](string.js) | Module implementation. Provides a default export. |
| [syntax-highlight.js](syntax-highlight.js) | Module implementation. Provides a default export. Imports: `lodash/isPlainObject`. |
| [undefined-string.js](undefined-string.js) | Module implementation. Provides a default export. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
