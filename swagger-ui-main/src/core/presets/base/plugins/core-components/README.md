<!-- local-learning-guide -->

# src/core/presets/base/plugins/core-components: local learning guide

[Source checkout guide](../../../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/presets/base/plugins/core-components` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `core/components/app`, `core/components/auth/authorization-popup`, `core/components/auth/authorize-btn`, `core/containers/authorize-btn`, `core/components/auth/authorize-operation-btn`, `core/components/auth/auths`, `core/components/auth/auth-item`, `core/components/auth/error`, `core/components/auth/api-key-auth`, `core/components/auth/basic-auth`, `core/components/example`, `core/components/examples-select`, `core/components/examples-select-value-retainer`, `core/components/auth/oauth2`, `core/components/clear`, `core/components/live-response`, `core/components/online-validator-badge`, `core/components/operations`, `core/components/operation-tag`, `core/components/operation`, `core/containers/OperationContainer`, `core/components/operation-summary`, `core/components/operation-summary-method`, `core/components/operation-summary-path`, `core/components/operation-extensions`, `core/components/operation-extension-row`, `core/components/responses`, `core/components/response`, `core/components/response-extension`, `core/components/response-body`, `core/components/parameters`, `core/components/parameter-extension`, `core/components/parameter-include-empty`, `core/components/parameter-row`, `core/components/execute`, `core/components/headers`, `core/components/errors`, `core/components/content-type`, `core/components/overview`, `core/components/initialized-input`, `core/components/info`, `core/containers/info`, `core/components/contact`, `core/components/license`, `core/components/jump-to-path`, `core/components/copy-to-clipboard-btn`, `core/components/footer`, `core/containers/filter`, `core/components/param-body`, `core/components/curl`, `core/components/property`, `core/components/try-it-out-button`, `core/components/version-pragma-filter`, `core/components/version-stamp`, `core/components/openapi-version`, `core/components/deep-link`, `core/components/svg-assets`, `core/components/providers/markdown`, `core/components/layouts/base`. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
