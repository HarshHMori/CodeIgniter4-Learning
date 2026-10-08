<!-- local-learning-guide -->

# Request filters

Path: `app/Filters/` in `test_project`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

before() runs before a matched controller; returning a response stops request execution. after() can inspect a completed response. Alias registration lives in app/Config/Filters.php, while protected groups are in Routes.php.

## Project context

Build and trace a basic URL shortener with a form, query builder, database lookup, and redirect. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read the header extraction and scheme validation.
2. Trace missing credentials, invalid credentials, and success.
3. Confirm the controller never runs when before() returns an error response.
4. Compare actual HTTP status codes and authenticator choice with the project guide.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
