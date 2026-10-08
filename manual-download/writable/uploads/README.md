<!-- local-learning-guide -->

# Upload storage

Path: `writable/uploads/` in `manual-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

In public/uploads, the product controller stores randomly named images and saves a relative path in products.product_image. In writable/uploads, this is a framework runtime storage location; no custom application upload handler necessarily uses it.

## Learn this folder in order

1. Find the actual move() destination in the controller.
2. Upload a sample file only through a handler that uses this folder.
3. Compare the stored filename with its database path.
4. Account for MIME/size validation and cleanup; the product example does not remove files on row deletion.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [index.html](index.html) | Directory placeholder; this is not the application front controller. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
