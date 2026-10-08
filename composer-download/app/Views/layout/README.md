<!-- local-learning-guide -->

# Shared page layout

Path: `app/Views/layout/` in `composer-download`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Layout templates supply the common shell for content views. Follow extend(), section(), and renderSection() calls to identify the active layout relationship.

## Learn this folder in order

1. Read the layout template and its section names.
2. Find views that extend this layout.
3. Change a common heading locally and compare the affected pages.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [main.php](main.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
