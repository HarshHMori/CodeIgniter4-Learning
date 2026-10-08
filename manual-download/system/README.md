<!-- local-learning-guide -->

# system: framework and dependency boundary

[Project guide](../README.md)

This manual distribution bundles CodeIgniter framework source here. app/Config/Paths.php points its systemDirectory at this folder.

## Learning order

1. Finish the application route/controller/database/view walkthrough in the parent guide.
2. Follow `public/index.php` and `app/Config/Paths.php` to understand how framework classes are loaded.
3. When an application call is unclear, read the relevant installed framework class and its comments.
4. Use package-supplied documentation for library internals. Application changes belong in `app/`; dependency changes can be overwritten by installation or upgrades.

## Maintenance

Run `composer install` from the project root to install locked dependencies. For the manual distribution, this installs its declared support packages while the framework remains in `system/`. Nested package/framework folders retain their supplied documentation and are excluded from the custom application README coverage. Generated autoload files are not learning exercise source.
