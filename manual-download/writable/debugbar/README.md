<!-- local-learning-guide -->

# Development debug data

Path: `writable/debugbar/` in `manual-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

The development toolbar can store request snapshots here. app/Config/Toolbar.php and filter configuration control its collection. These JSON snapshots are generated debugging artifacts.

## Learn this folder in order

1. Run in the development environment.
2. Inspect the toolbar for routes, queries, and timing.
3. Compare a request snapshot with its actual controller; disable detailed debugging for production.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [index.html](index.html) | Directory placeholder; this is not the application front controller. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
