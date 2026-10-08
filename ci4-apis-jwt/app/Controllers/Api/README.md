<!-- local-learning-guide -->

# API request handlers

Path: `app/Controllers/Api/` in `ci4-apis-jwt`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

These controllers implement the API operations listed in the project guide. ResourceController supplies the model selected by modelName and response helpers; filters are attached in the route configuration.

## Project context

Learn password hashing, JWT issuance and verification, author-owned resources, and logout through a token blocklist. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read the endpoint table in the project guide.
2. Match fields and Content-Type to the actual request reader.
3. Run a successful call, then missing input and missing-record cases.
4. For protected calls, follow the filter before the controller and inspect resource ownership.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [AuthorController.php](AuthorController.php) | Class: AuthorController. Methods: `registerAuthor()`, `loginAuthor()`, `authorProfile()`, `logoutAuthor()`. |
| [BookController.php](BookController.php) | Class: BookController. Methods: `createBook()`, `authorBooks()`, `deleteAuthorBook()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
