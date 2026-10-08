<!-- local-learning-guide -->

# Request handlers

Path: `app/Controllers/` in `composer-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Controllers read request data, call model/query operations, and choose a response. BaseController initializes shared helpers/services for its descendants. API controllers extending ResourceController use its model and JSON response helpers.

## Project context

Learn routing, views, query builder, models, entities, forms, helpers, services, sessions, and pagination in one practice application. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Find the active route for a method before executing it.
2. Identify getPost(), getVar(), or raw JSON parsing and supply matching input.
3. Trace validation, database operation, success response, and failure response.
4. Inspect hardcoded IDs and mutation methods before calling them.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [BaseController.php](BaseController.php) | Class: BaseController. Methods: `initController()`. |
| [Home.php](Home.php) | Class: Home. Methods: `index()`, `manageCookie()`, `readCookie()`, `deleteCookie()`, `testImage()`, `testCssFile()`, `testJS()`, `employeeList()`, `testInflector()`, `testNumbers()`, `testFileSystem()`, `testText()`, `testCustom()`, `testBudget()`, `testCURL()`, `testPagination()`, `__construct()`, `storeData()`, `readSessionValue()`, `removeData()`, `testURL()`, `testMessage()`, `testAgent()`, `testDateTime()`. |
| [ManagerController.php](ManagerController.php) | Class: ManagerController. Methods: `index()`, `addManager()`. |
| [NewStudentController.php](NewStudentController.php) | Class: NewStudentController. Methods: `__construct()`, `getData()`, `insertData()`, `updateData()`, `deleteData()`. |
| [ProductController.php](ProductController.php) | Class: ProductController. Methods: `index()`. |
| [Site.php](Site.php) | Class: Site. Methods: `__construct()`, `welcomePage()`, `index()`, `aboutUs()`, `services()`, `contactUs()`, `formSubmit()`, `nameRoute()`, `contactUser()`, `projects()`, `projectsAlpha()`, `projectsAlphaNum()`, `projectsAny()`, `servicesProject()`, `getData()`, `insertManager()`, `updateManager()`, `deleteManager()`, `getManagers()`, `getDataEntity()`, `insertDataEntity()`, `getDataAccessor()`, `getDataVirtual()`. |
| [SiteController.php](SiteController.php) | Class: SiteController. Methods: `__construct()`, `getDataInnerJoin()`, `getDataLeftJoin()`, `getDataRightJoin()`. |
| [StudentController.php](StudentController.php) | Class: StudentController. Methods: `__construct()`, `insertData()`, `updateData()`, `deleteData()`, `selectData()`. |

## Continue into child folders

- [Admin/](Admin/README.md)
- [User/](User/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
