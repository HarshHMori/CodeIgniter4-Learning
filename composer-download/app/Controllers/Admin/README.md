<!-- local-learning-guide -->

# Admin route-group examples

Path: `app/Controllers/Admin/` in `composer-download`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

The fundamentals project groups admin/list, admin/add, admin/update, and admin/delete under an explicit controller namespace. The folder demonstrates organization, not an authorization system by itself.

## Learn this folder in order

1. Follow the admin group in Routes.php.
2. Read each public method and its actual response.
3. Explain why a namespace or path named admin does not restrict access without a filter.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [AdminController.php](AdminController.php) | Class: AdminController. Methods: `list()`, `add()`, `update()`, `delete()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
