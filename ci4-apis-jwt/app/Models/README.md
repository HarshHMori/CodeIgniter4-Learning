<!-- local-learning-guide -->

# Database models

Path: `app/Models/` in `ci4-apis-jwt`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Models connect application operations to table names, primary keys, allowedFields, result types, callbacks, and optional timestamps or soft deletes. allowedFields prevents writing unlisted fields; it is not input validation or authorization.

## Project context

Learn password hashing, JWT issuance and verification, author-owned resources, and logout through a token blocklist. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Compare each table and writable field with its migration.
2. Trace find(), first(), findAll(), insert()/save(), update(), and delete() from a controller.
3. Check array versus entity return types before reading properties.
4. If soft deletes or timestamps are enabled, confirm their columns exist.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [TokenBlacklisted.php](TokenBlacklisted.php) | Class: TokenBlacklisted. Table: `token_blacklisted` (source contains leading whitespace). Writable fields: `token`. |

## Continue into child folders

- [Phase3/](Phase3/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
