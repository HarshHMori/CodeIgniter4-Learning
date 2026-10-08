<!-- local-learning-guide -->

# Entity transformations

Path: `app/Entities/` in `composer-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

ManagerEntity represents a manager as an object. Its active setPassword() hashes assigned passwords before persistence. Data maps, other setters/accessors, and virtual-property examples are present as comments and do not currently execute.

## Project context

Learn routing, views, query builder, models, entities, forms, helpers, services, sessions, and pagination in one practice application. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read ManagerModel returnType and ManagerController entity assignments.
2. Assign a password and follow setPassword() into the stored attribute.
3. Compare the managers schema with the model before attempting save().
4. Enable one commented accessor as an exercise and observe reads separately from stored values.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [ManagerEntity.php](ManagerEntity.php) | Class: ManagerEntity. Methods: `setPassword()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
