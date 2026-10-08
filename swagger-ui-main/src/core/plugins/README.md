<!-- local-learning-guide -->

# src/core/plugins: local learning guide

[Source checkout guide](../../../README.md) · [Parent guide](../README.md)

## What this folder does

Plugins extend UI behavior and state through exported registrations. Follow each plugin index into actions, reducers, selectors, components, and lifecycle hooks where present.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

No files directly here; continue into the child folders.

## Child folders

- [accessibility/](accessibility/README.md)
- [auth/](auth/README.md)
- [configs/](configs/README.md)
- [deep-linking/](deep-linking/README.md)
- [download-url/](download-url/README.md)
- [err/](err/README.md)
- [filter/](filter/README.md)
- [icons/](icons/README.md)
- [json-schema-2020-12/](json-schema-2020-12/README.md)
- [json-schema-2020-12-samples/](json-schema-2020-12-samples/README.md)
- [json-schema-5/](json-schema-5/README.md)
- [json-schema-5-samples/](json-schema-5-samples/README.md)
- [layout/](layout/README.md)
- [logs/](logs/README.md)
- [oas3/](oas3/README.md)
- [oas31/](oas31/README.md)
- [oas32/](oas32/README.md)
- [on-complete/](on-complete/README.md)
- [request-snippets/](request-snippets/README.md)
- [safe-render/](safe-render/README.md)
- [spec/](spec/README.md)
- [swagger-client/](swagger-client/README.md)
- [syntax-highlighting/](syntax-highlighting/README.md)
- [util/](util/README.md)
- [versions/](versions/README.md)
- [view/](view/README.md)
- [view-legacy/](view-legacy/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
