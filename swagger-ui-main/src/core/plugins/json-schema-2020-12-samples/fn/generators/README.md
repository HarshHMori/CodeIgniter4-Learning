<!-- local-learning-guide -->

# src/core/plugins/json-schema-2020-12-samples/fn/generators: local learning guide

[Source checkout guide](../../../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/json-schema-2020-12-samples/fn/generators` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [date-time.js](date-time.js) | Module implementation. Provides a default export. |
| [date.js](date.js) | Module implementation. Provides a default export. |
| [double.js](double.js) | Module implementation. Provides a default export. |
| [duration.js](duration.js) | Module implementation. Provides a default export. |
| [email.js](email.js) | Module implementation. Provides a default export. |
| [float.js](float.js) | Module implementation. Provides a default export. |
| [hostname.js](hostname.js) | Module implementation. Provides a default export. |
| [idn-email.js](idn-email.js) | Module implementation. Provides a default export. |
| [idn-hostname.js](idn-hostname.js) | Module implementation. Provides a default export. |
| [int32.js](int32.js) | Module implementation. Provides a default export. |
| [int64.js](int64.js) | Module implementation. Provides a default export. |
| [ipv4.js](ipv4.js) | Module implementation. Provides a default export. |
| [ipv6.js](ipv6.js) | Module implementation. Provides a default export. |
| [iri-reference.js](iri-reference.js) | Module implementation. Provides a default export. |
| [iri.js](iri.js) | Module implementation. Provides a default export. |
| [json-pointer.js](json-pointer.js) | Module implementation. Provides a default export. |
| [password.js](password.js) | Module implementation. Provides a default export. |
| [regex.js](regex.js) | Module implementation. Provides a default export. |
| [relative-json-pointer.js](relative-json-pointer.js) | Module implementation. Provides a default export. |
| [time.js](time.js) | Module implementation. Provides a default export. |
| [uri-reference.js](uri-reference.js) | Module implementation. Provides a default export. |
| [uri-template.js](uri-template.js) | Module implementation. Provides a default export. |
| [uri.js](uri.js) | Module implementation. Provides a default export. |
| [uuid.js](uuid.js) | Module implementation. Provides a default export. |

## Child folders

- [media-types/](media-types/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
