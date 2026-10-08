<!-- local-learning-guide -->

# Optional seed data

Path: `app/Database/Seeds/` in `composer-download`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Seeders insert learning records after migrations. They are not normally run during a web request and should be reviewed before execution.

## Learn this folder in order

1. Read run() and determine the target table.
2. Check whether related parent rows must already exist.
3. Run php spark db:seed SeederClassName from the project root using a class present below.
4. Inspect rows and consider whether rerunning inserts duplicates.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [ManagerSeeder.php](ManagerSeeder.php) | Class: ManagerSeeder. Methods: `run()`, `generateFakeManagers()`. |
| [ProjectSeeder.php](ProjectSeeder.php) | Class: ProjectSeeder. Methods: `run()`, `generateFakeProject()`. |
| [StudentSeeder.php](StudentSeeder.php) | Class: StudentSeeder. Methods: `run()`, `generateFakeStudent()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
