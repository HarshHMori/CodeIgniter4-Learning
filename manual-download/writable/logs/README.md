<!-- local-learning-guide -->

# Application logs

Path: `writable/logs/` in `manual-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

The logger writes dated runtime logs according to app/Config/Logger.php. Logs can explain connection, validation, and exception failures and may contain private request details.

## Learn this folder in order

1. Reproduce one failed request locally.
2. Inspect the relevant timestamp and stack trace.
3. Follow the named source file and correct the cause; keep log files out of public responses.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [index.html](index.html) | Directory placeholder; this is not the application front controller. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
