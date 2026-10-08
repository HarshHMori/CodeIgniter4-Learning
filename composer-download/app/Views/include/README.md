<!-- local-learning-guide -->

# Shared view fragments

Path: `app/Views/include/` in `composer-download`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

These templates hold page fragments intended to be included by other views. A fragment is not normally routed directly.

## Learn this folder in order

1. Find view() calls referencing include/ paths.
2. Check whether those calls are active or commented.
3. Compare fragment reuse with a layout template and its sections.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [footer.php](footer.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [header.php](header.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
