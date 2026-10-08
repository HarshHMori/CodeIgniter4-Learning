<!-- local-learning-guide -->

# File session storage

Path: `writable/session/` in `manual-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

When configured to use file sessions, the session service writes browser/session state here. The selected handler and save path are in app/Config/Session.php.

## Learn this folder in order

1. Keep the same browser or API cookie jar across requests.
2. Trace a session set/get or flashdata example if the project contains one.
3. Compare session persistence with token authentication; a bearer token is not automatically a browser session.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [index.html](index.html) | Directory placeholder; this is not the application front controller. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
