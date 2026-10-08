<!-- local-learning-guide -->

# Generated cache storage

Path: `writable/cache/` in `manual-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

This directory can hold cache entries for the configured file cache handler. Application cache settings live in app/Config/Cache.php. Existing entries are generated data and may be absent.

## Learn this folder in order

1. Read the selected cache handler and path.
2. Find an actual cache save/get call before expecting a file.
3. Compare a cache hit with a miss after expiry; do not treat cache contents as durable database storage.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [index.html](index.html) | Directory placeholder; this is not the application front controller. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
