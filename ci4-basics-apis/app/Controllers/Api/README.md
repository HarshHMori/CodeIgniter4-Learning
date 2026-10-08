<!-- local-learning-guide -->

# API request handlers

Path: `app/Controllers/Api/` in `ci4-basics-apis`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

These controllers implement the API operations listed in the project guide. ResourceController supplies the model selected by modelName and response helpers; filters are attached in the route configuration.

## Project context

Learn API routes, form input, JSON updates, model operations, duplicate checks, and JSON response bodies. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read the endpoint table in the project guide.
2. Match fields and Content-Type to the actual request reader.
3. Run a successful call, then missing input and missing-record cases.
4. For protected calls, follow the filter before the controller and inspect resource ownership.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [StudentController.php](StudentController.php) | Class: StudentController. Methods: `addStudent()`, `listStudents()`, `getSingleStudentData()`, `updateStudent()`, `deleteStudent()`, `checkStudentByEmail()`, `checkStudentByPhone()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
