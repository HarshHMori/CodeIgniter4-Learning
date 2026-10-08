<!-- local-learning-guide -->

# src/core/plugins/json-schema-2020-12: local learning guide

[Source checkout guide](../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/json-schema-2020-12` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [context.js](context.js) | Exports: `JSONSchemaContext`, `JSONSchemaLevelContext`, `JSONSchemaCyclesContext`, `JSONSchemaPathContext`. Imports: `react`. |
| [enum.js](enum.js) | Exports: `JSONSchemaIsExpandedState`. |
| [fn.js](fn.js) | Exports: `upperFirst`, `makeGetTitle`, `makeGetType`, `isBooleanJSONSchema`, `hasKeyword`, `makeIsExpandable`, `stringify`, `stringifyConstraints`, `getDependentRequired`, `isPlainObject`, `isEmptyObject`, `isEmptyArray`, `difference`, `getSchemaKeywords`, `makeGetExtensionKeywords`, `hasSchemaType`. Imports: `immutable`. |
| [hoc.jsx](hoc.jsx) | Exports: `withJSONSchemaContext`, `makeWithJSONSchemaSystemContext`. Imports: `react`, `./components/JSONSchema/JSONSchema`, `./components/keywords/$schema`, `./components/keywords/$vocabulary/$vocabulary`, `./components/keywords/$id`, `./components/keywords/$anchor`, `./components/keywords/$dynamicAnchor`, `./components/keywords/$ref`, `./components/keywords/$dynamicRef`, `./components/keywords/$defs`, `./components/keywords/$comment`, `./components/keywords/AllOf`, `./components/keywords/AnyOf`, `./components/keywords/OneOf`, `./components/keywords/Not`, `./components/keywords/If`, `./components/keywords/Then`, `./components/keywords/Else`, `./components/keywords/DependentSchemas`, `./components/keywords/PrefixItems`, `./components/keywords/Items`, `./components/keywords/Contains`, `./components/keywords/Properties/Properties`, `./components/keywords/PatternProperties/PatternProperties`, `./components/keywords/AdditionalProperties`, `./components/keywords/PropertyNames`, `./components/keywords/UnevaluatedItems`, `./components/keywords/UnevaluatedProperties`, `./components/keywords/Type`, `./components/keywords/Enum/Enum`, `./components/keywords/Const/Const`, `./components/keywords/Constraint/Constraint`, `./components/keywords/DependentRequired/DependentRequired`, `./components/keywords/ContentSchema`, `./components/keywords/Title/Title`, `./components/keywords/Description/Description`, `./components/keywords/Default/Default`, `./components/keywords/Deprecated`, `./components/keywords/ReadOnly`, `./components/keywords/WriteOnly`, `./components/keywords/Examples/Examples`, `./components/keywords/ExtensionKeywords/ExtensionKeywords`, `./components/JSONViewer/JSONViewer`, `./components/Accordion/Accordion`, `./components/ExpandDeepButton/ExpandDeepButton`, `./components/icons/ChevronRight`, `./context`, `./hooks`, `./fn`. |
| [hooks.js](hooks.js) | Exports: `useConfig`, `useComponent`, `useFn`, `useJSONSchemaContextState`, `useLevel`, `useIsEmbedded`, `usePath`, `useIsExpanded`, `useRenderedSchemas`, `useIsCircular`. Imports: `react`, `./context`, `./enum`. |
| [index.js](index.js) | Module implementation. Provides a default export. Imports: `./components/JSONSchema/JSONSchema`, `./components/keywords/$schema`, `./components/keywords/$vocabulary/$vocabulary`, `./components/keywords/$id`, `./components/keywords/$anchor`, `./components/keywords/$dynamicAnchor`, `./components/keywords/$ref`, `./components/keywords/$dynamicRef`, `./components/keywords/$defs`, `./components/keywords/$comment`, `./components/keywords/AllOf`, `./components/keywords/AnyOf`, `./components/keywords/OneOf`, `./components/keywords/Not`, `./components/keywords/If`, `./components/keywords/Then`, `./components/keywords/Else`, `./components/keywords/DependentSchemas`, `./components/keywords/PrefixItems`, `./components/keywords/Items`, `./components/keywords/Contains`, `./components/keywords/Properties/Properties`, `./components/keywords/PatternProperties/PatternProperties`, `./components/keywords/AdditionalProperties`, `./components/keywords/PropertyNames`, `./components/keywords/UnevaluatedItems`, `./components/keywords/UnevaluatedProperties`, `./components/keywords/Type`, `./components/keywords/Enum/Enum`, `./components/keywords/Const/Const`, `./components/keywords/Constraint/Constraint`, `./components/keywords/DependentRequired/DependentRequired`, `./components/keywords/ContentSchema`, `./components/keywords/Title/Title`, `./components/keywords/Description/Description`, `./components/keywords/Default/Default`, `./components/keywords/Deprecated`, `./components/keywords/ReadOnly`, `./components/keywords/WriteOnly`, `./components/keywords/Examples/Examples`, `./components/keywords/ExtensionKeywords/ExtensionKeywords`, `./components/JSONViewer/JSONViewer`, `./components/Accordion/Accordion`, `./components/ExpandDeepButton/ExpandDeepButton`, `./components/icons/ChevronRight`, `./fn`, `./context`, `./hooks`, `./hoc`. |
| [prop-types.js](prop-types.js) | Exports: `objectSchema`, `booleanSchema`, `schema`. Imports: `prop-types`. |

## Child folders

- [components/](components/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
