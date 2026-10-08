<!-- local-learning-guide -->

# src/core/plugins/err: local learning guide

[Source checkout guide](../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/err` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [actions.js](actions.js) | Exports: `NEW_THROWN_ERR`, `NEW_THROWN_ERR_BATCH`, `NEW_SPEC_ERR`, `NEW_SPEC_ERR_BATCH`, `NEW_AUTH_ERR`, `CLEAR`, `CLEAR_BY`, `newThrownErr`, `newThrownErrBatch`, `newSpecErr`, `newSpecErrBatch`, `newAuthErr`, `clear`, `clearBy`. Imports: `serialize-error`. Trace dispatched actions to matching reducers and consumers. |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `./reducers`, `./actions`, `./selectors`. |
| [reducers.js](reducers.js) | Module implementation. Provides a default export. Imports: `./actions`, `immutable`, `./error-transformers/hook`. Trace action types to resulting state updates. |
| [selectors.js](selectors.js) | Exports: `allErrors`, `lastError`. Imports: `immutable`, `reselect`. Trace selected state to its UI or action consumer. |

## Child folders

- [error-transformers/](error-transformers/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
