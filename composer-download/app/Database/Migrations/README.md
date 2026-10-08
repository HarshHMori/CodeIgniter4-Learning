<!-- local-learning-guide -->

# Database migrations

Path: `app/Database/Migrations/` in `composer-download`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Migration filenames order changes. up() creates or alters tables; down() reverses that change. The migration tracking table records applied versions; running migrate again applies pending versions rather than recreating everything.

## Project context

Learn routing, views, query builder, models, entities, forms, helpers, services, sessions, and pagination in one practice application. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read column type, length, nullability, defaults, keys, and relationships.
2. Compare exact column names with models/controllers.
3. Run php spark migrate from the project root after setup; Shield must create its users table before the custom user-column migration.
4. Inspect the resulting tables. Rollback can drop tables and data, so experiment only in a disposable database.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [2026-08-26-114533_CreateStudentsTable.php](2026-08-26-114533_CreateStudentsTable.php) | Class: CreateStudentsTable. Methods: `up()`, `down()`. Creates/alters: `students`. Columns: `id`, `name`, `email`, `age`, `address`, `gender`, `constraint`. `created_at` defaults to current database time. |
| [2026-08-26-130351_TestMigration.php](2026-08-26-130351_TestMigration.php) | Class: TestMigration. Methods: `up()`, `down()`. Creates/alters: `test`. Columns: `id`, `name`, `age`. `created_at` defaults to current database time. |
| [2026-08-26-133714_CreateEmployeeTable.php](2026-08-26-133714_CreateEmployeeTable.php) | Class: CreateEmployeeTable. Methods: `up()`, `down()`. Creates/alters: `employees`. Columns: `id`, `name`, `email`, `age`, `designation`. `created_at` defaults to current database time. |
| [2026-08-31-104108_CreateManagersTable.php](2026-08-31-104108_CreateManagersTable.php) | Class: CreateManagersTable. Methods: `up()`, `down()`. Creates/alters: `managers`. Columns: `id`, `name`, `email`, `designation`. `created_at` defaults to current database time. |
| [2026-08-31-104131_CreateProjectsTable.php](2026-08-31-104131_CreateProjectsTable.php) | Class: CreateProjectsTable. Methods: `up()`, `down()`. Creates/alters: `projects`. Columns: `id`, `manager_id`, `title`, `budget`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
