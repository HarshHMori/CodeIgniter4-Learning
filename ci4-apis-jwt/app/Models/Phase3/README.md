<!-- local-learning-guide -->

# Author and book models

Path: `app/Models/Phase3/` in `ci4-apis-jwt`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

This namespace contains the JWT exercise models. The API controllers point their modelName at App\Models\Phase3 classes. Author rows hold password hashes; book rows hold author_id for ownership filtering.

## Project context

Learn password hashing, JWT issuance and verification, author-owned resources, and logout through a token blocklist. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Compare the author/book schema with allowedFields.
2. Trace author_id from verified JWT claims into book creation and listing.
3. Check deletion uses both book ID and author ID.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [AuthorModel.php](AuthorModel.php) | Class: AuthorModel. Table: `authors`. Writable fields: `name`, `email`, `password`, `Phone_no`. |
| [BookModel.php](BookModel.php) | Class: BookModel. Table: `books`. Writable fields: `author_id`, `name`, `cost`, `publication`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
