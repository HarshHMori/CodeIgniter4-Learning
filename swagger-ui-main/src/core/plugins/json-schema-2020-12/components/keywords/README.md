<!-- local-learning-guide -->

# src/core/plugins/json-schema-2020-12/components/keywords: local learning guide

[Source checkout guide](../../../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/json-schema-2020-12/components/keywords` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [$anchor.jsx]($anchor.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [$comment.jsx]($comment.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [$defs.jsx]($defs.jsx) | Module implementation. Provides a default export. Imports: `react`, `classnames`, `../../prop-types`, `../../hooks`, `../../context`. |
| [$dynamicAnchor.jsx]($dynamicAnchor.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [$dynamicRef.jsx]($dynamicRef.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [$id.jsx]($id.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [$ref.jsx]($ref.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [$schema.jsx]($schema.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [_all.scss](_all.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [AdditionalProperties.jsx](AdditionalProperties.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [AllOf.jsx](AllOf.jsx) | Module implementation. Provides a default export. Imports: `react`, `classnames`, `../../prop-types`, `../../hooks`, `../../context`. |
| [AnyOf.jsx](AnyOf.jsx) | Module implementation. Provides a default export. Imports: `react`, `classnames`, `../../prop-types`, `../../hooks`, `../../context`. |
| [Contains.jsx](Contains.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [ContentSchema.jsx](ContentSchema.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [DependentSchemas.jsx](DependentSchemas.jsx) | Module implementation. Provides a default export. Imports: `react`, `classnames`, `../../prop-types`, `../../hooks`, `../../context`. |
| [Deprecated.jsx](Deprecated.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [Else.jsx](Else.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [If.jsx](If.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [Items.jsx](Items.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [Not.jsx](Not.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [OneOf.jsx](OneOf.jsx) | Module implementation. Provides a default export. Imports: `react`, `classnames`, `../../prop-types`, `../../hooks`, `../../context`. |
| [PrefixItems.jsx](PrefixItems.jsx) | Module implementation. Provides a default export. Imports: `react`, `classnames`, `../../prop-types`, `../../hooks`, `../../context`. |
| [PropertyNames.jsx](PropertyNames.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [ReadOnly.jsx](ReadOnly.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |
| [Then.jsx](Then.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [Type.jsx](Type.jsx) | Module implementation. Provides a default export. Imports: `react`, `prop-types`, `../../prop-types`, `../../hooks`. |
| [UnevaluatedItems.jsx](UnevaluatedItems.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [UnevaluatedProperties.jsx](UnevaluatedProperties.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`, `../../hooks`. |
| [WriteOnly.jsx](WriteOnly.jsx) | Module implementation. Provides a default export. Imports: `react`, `../../prop-types`. |

## Child folders

- [$vocabulary/]($vocabulary/README.md)
- [Const/](Const/README.md)
- [Constraint/](Constraint/README.md)
- [Default/](Default/README.md)
- [DependentRequired/](DependentRequired/README.md)
- [Description/](Description/README.md)
- [Enum/](Enum/README.md)
- [Examples/](Examples/README.md)
- [ExtensionKeywords/](ExtensionKeywords/README.md)
- [PatternProperties/](PatternProperties/README.md)
- [Properties/](Properties/README.md)
- [Title/](Title/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
