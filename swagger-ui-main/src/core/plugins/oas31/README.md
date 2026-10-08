<!-- local-learning-guide -->

# src/core/plugins/oas31: local learning guide

[Source checkout guide](../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/oas31` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [after-load.js](after-load.js) | Module implementation. Provides a default export. Imports: `./json-schema-2020-12-extensions/fn`, `./fn`, `./oas3-extensions/fn`, `core/utils`. |
| [fn.js](fn.js) | Exports: `isOAS31`, `createOnlyOAS31Selector`, `createOnlyOAS31SelectorWrapper`, `createSystemSelector`, `createOnlyOAS31ComponentWrapper`, `wrapOAS31Fn`. Imports: `react`. |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `./components/webhooks`, `./components/license`, `./components/contact`, `./components/info`, `./components/json-schema-dialect`, `./components/version-pragma-filter`, `./components/model/model`, `./components/models/models`, `./components/auth/mutual-tls-auth`, `./components/auth/auths`, `./wrap-components/license`, `./wrap-components/contact`, `./wrap-components/info`, `./wrap-components/model`, `./wrap-components/models`, `./wrap-components/version-pragma-filter`, `./wrap-components/auth/auth-item`, `./wrap-components/auths`, `./fn`, `./spec-extensions/selectors`, `./spec-extensions/wrap-selectors`, `./auth-extensions/wrap-selectors`, `./selectors`, `./json-schema-2020-12-extensions/components/keywords/Example`, `./json-schema-2020-12-extensions/components/keywords/Xml`, `./json-schema-2020-12-extensions/components/keywords/Discriminator/Discriminator`, `./json-schema-2020-12-extensions/components/keywords/OpenAPIExtensions`, `./json-schema-2020-12-extensions/components/keywords/ExternalDocs`, `./json-schema-2020-12-extensions/wrap-components/keywords/Description`, `./json-schema-2020-12-extensions/wrap-components/keywords/Examples`, `./json-schema-2020-12-extensions/wrap-components/keywords/Properties`, `./after-load`. |
| [selectors.js](selectors.js) | Exports: `selectLicenseUrl`. Imports: `reselect`, `core/utils/url`. Trace selected state to its UI or action consumer. |

## Child folders

- [auth-extensions/](auth-extensions/README.md)
- [components/](components/README.md)
- [json-schema-2020-12-extensions/](json-schema-2020-12-extensions/README.md)
- [oas3-extensions/](oas3-extensions/README.md)
- [spec-extensions/](spec-extensions/README.md)
- [wrap-components/](wrap-components/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
