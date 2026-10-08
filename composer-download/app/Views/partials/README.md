<!-- local-learning-guide -->

# Reusable view pieces

Path: `app/Views/partials/` in `composer-download`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Partial templates are small page fragments included by views or layouts. They run only when the rendering path includes them.

## Learn this folder in order

1. Read each fragment and identify its expected variables.
2. Find the view/layout that includes it.
3. Compare shared fragments with the page-specific content sections.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [contact-form.php](contact-form.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
