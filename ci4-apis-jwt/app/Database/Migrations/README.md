<!-- local-learning-guide -->

# Database migrations

Path: `app/Database/Migrations/` in `ci4-apis-jwt`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Migration filenames order changes. up() creates or alters tables; down() reverses that change. The migration tracking table records applied versions; running migrate again applies pending versions rather than recreating everything.

## Project context

Learn password hashing, JWT issuance and verification, author-owned resources, and logout through a token blocklist. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read column type, length, nullability, defaults, keys, and relationships.
2. Compare exact column names with models/controllers.
3. Run php spark migrate from the project root after setup; Shield must create its users table before the custom user-column migration.
4. Inspect the resulting tables. Rollback can drop tables and data, so experiment only in a disposable database.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [2026-10-05-122947_CreateAuthorsTable.php](2026-10-05-122947_CreateAuthorsTable.php) | Class: CreateAuthorsTable. Methods: `up()`, `down()`. Creates/alters: `authors`. Columns: `id`, `name`, `email`, `password`. `created_at` defaults to current database time. |
| [2026-10-05-123032_CreateBooksTable.php](2026-10-05-123032_CreateBooksTable.php) | Class: CreateBooksTable. Methods: `up()`, `down()`. Creates/alters: `books`. Columns: `id`, `author_id`, `name`, `publication`, `cost`. `created_at` defaults to current database time. |
| [2026-10-06-140231_CreateTokenBlocklistedTable.php](2026-10-06-140231_CreateTokenBlocklistedTable.php) | Class: CreateTokenBlocklistedTable. Methods: `up()`, `down()`. Creates/alters: `token_blacklisted`. Columns: `id`, `token`. `created_at` defaults to current database time. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
