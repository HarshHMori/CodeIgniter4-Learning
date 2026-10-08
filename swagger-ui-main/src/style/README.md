<!-- local-learning-guide -->

# src/style: local learning guide

[Source checkout guide](../../README.md) · [Parent guide](../README.md)

## What this folder does

SCSS source is compiled into viewer stylesheets; trace main.scss imports before editing a partial.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [_authorize.scss](_authorize.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_buttons.scss](_buttons.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_dark-mode.scss](_dark-mode.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_errors.scss](_errors.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_form.scss](_form.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_information.scss](_information.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_layout.scss](_layout.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_markdown.scss](_markdown.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_mixins.scss](_mixins.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_modal.scss](_modal.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_models.scss](_models.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_servers.scss](_servers.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_split-pane-mode.scss](_split-pane-mode.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_table.scss](_table.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_topbar.scss](_topbar.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_type.scss](_type.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [_variables.scss](_variables.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |
| [main.scss](main.scss) | SCSS stylesheet source; trace imports from the parent or main.scss and match selectors to UI components. |

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
