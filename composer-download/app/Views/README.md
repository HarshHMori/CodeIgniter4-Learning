<!-- local-learning-guide -->

# HTML templates

Path: `app/Views/` in `composer-download`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

A controller calls view("template", data), and keys in data become variables in that template. Read the matching controller to learn where those values come from. Custom forms and pages live alongside the starter welcome template and error views.

## Learn this folder in order

1. Follow a view() call from a route/controller into a file below.
2. Map each input name to the controller request reader.
3. Distinguish escaped output, reusable layout sections, and browser-side scripts.
4. Inspect the resulting page and its network requests; API JSON does not use these templates.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [about-us.php](about-us.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [add-manager.php](add-manager.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [contact-us.php](contact-us.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [create-manager.php](create-manager.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [custom_404.php](custom_404.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [form.php](form.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [home.php](home.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [managers.php](managers.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [message.php](message.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [services.php](services.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [welcome-page.php](welcome-page.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [welcome_message.php](welcome_message.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Continue into child folders

- [errors/](errors/README.md)
- [include/](include/README.md)
- [layout/](layout/README.md)
- [partials/](partials/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.
