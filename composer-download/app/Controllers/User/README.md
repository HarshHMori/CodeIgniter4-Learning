<!-- local-learning-guide -->

# User namespace example

Path: `app/Controllers/User/` in `composer-download`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

The fundamentals route user/home resolves UserController::index through the App\Controllers\User namespace. This shows how controller subfolders map to namespaces.

## Learn this folder in order

1. Compare the route namespace with the PHP namespace.
2. Follow index() into its response or view.
3. Create another explicitly routed method as a learning exercise.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [UserController.php](UserController.php) | Class: UserController. Methods: `index()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
