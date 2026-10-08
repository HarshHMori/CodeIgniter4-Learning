<!-- local-learning-guide -->

# Reusable helper functions

Path: `app/Helpers/` in `composer-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

custom_helper.php defines slugify() and getBudgetWiseProjects(). Helper filenames use the _helper.php suffix; helper("custom") loads this file. The slug function echoes its transformed string, whereas the budget function returns query rows.

## Learn this folder in order

1. Find where the helper is loaded by BaseController or a method.
2. Trace the function from its calling controller.
3. Compare echo with return and identify effects on response composition.
4. Review the HTML comment before the PHP opening tag: including the helper can emit output.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [custom_helper.php](custom_helper.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
