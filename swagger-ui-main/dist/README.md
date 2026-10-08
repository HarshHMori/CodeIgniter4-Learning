<!-- local-learning-guide -->

# dist: local learning guide

[Source checkout guide](../README.md) · [Parent guide](../README.md)

## What this folder does

Prebuilt browser bundles and styles are generated from source. Serve them with npm run serve-static from the checkout root; rebuild with npm run build after source changes.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [favicon-16x16.png](favicon-16x16.png) | Supporting asset; follow its import or configuration reference. |
| [favicon-32x32.png](favicon-32x32.png) | Supporting asset; follow its import or configuration reference. |
| [index.css](index.css) | Supporting asset; follow its import or configuration reference. |
| [index.html](index.html) | Browser entry/support page; inspect script and stylesheet URLs. |
| [oauth2-redirect.html](oauth2-redirect.html) | Browser entry/support page; inspect script and stylesheet URLs. |
| [oauth2-redirect.js](oauth2-redirect.js) | Module implementation. |
| [swagger-initializer.js](swagger-initializer.js) | Module implementation. |
| [swagger-ui-bundle.js](swagger-ui-bundle.js) | Large bundled/generated asset; read the corresponding source rather than editing the bundle. |
| [swagger-ui-bundle.js.LICENSE.txt](swagger-ui-bundle.js.LICENSE.txt) | Supporting asset; follow its import or configuration reference. |
| [swagger-ui-es-bundle-core.js](swagger-ui-es-bundle-core.js) | Large bundled/generated asset; read the corresponding source rather than editing the bundle. |
| [swagger-ui-es-bundle-core.js.LICENSE.txt](swagger-ui-es-bundle-core.js.LICENSE.txt) | Supporting asset; follow its import or configuration reference. |
| [swagger-ui-es-bundle.js](swagger-ui-es-bundle.js) | Large bundled/generated asset; read the corresponding source rather than editing the bundle. |
| [swagger-ui-es-bundle.js.LICENSE.txt](swagger-ui-es-bundle.js.LICENSE.txt) | Supporting asset; follow its import or configuration reference. |
| [swagger-ui-standalone-preset.js](swagger-ui-standalone-preset.js) | Large bundled/generated asset; read the corresponding source rather than editing the bundle. |
| [swagger-ui-standalone-preset.js.LICENSE.txt](swagger-ui-standalone-preset.js.LICENSE.txt) | Supporting asset; follow its import or configuration reference. |
| [swagger-ui.css](swagger-ui.css) | Large bundled/generated asset; read the corresponding source rather than editing the bundle. |
| [swagger-ui.js](swagger-ui.js) | Large bundled/generated asset; read the corresponding source rather than editing the bundle. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
