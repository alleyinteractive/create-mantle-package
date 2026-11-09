# Create Mantle Package

Provides a base package for packages built on-top of the [Mantle Framework](https://mantle.alley.com/).

[![All Pull Request Tests](https://github.com/alleyinteractive/create-mantle-package/actions/workflows/all-pr-tests.yml/badge.svg)](https://github.com/alleyinteractive/create-mantle-package/actions/workflows/all-pr-tests.yml)

## Requirements

- PHP 8.3+
- Mantle Framework 1.x

## Package Setup

After creating a package from this template, you will have everything you need
to setup a new Mantle Framework package. Your package will have continuous
integration via GitHub actions. You should search and replace the namespace to
your application's namespace and package name.

| Search                  | Replace                  |
| ----------------------- | ------------------------ |
| `Create_Mantle_Package` | Your package's namespace |
| `create-mantle-package` | Your package's name.     |

Classes are autoloaded with PSR-4 from `src/`, following Mantle's convention of
WordPress-style class names in matching file names (for example,
`src/Example_Service_Provider.php`). Service providers listed under
`extra.mantle.providers` in `composer.json` are discovered automatically by
Mantle applications.

## Testing

```bash
composer test      # phpcs, phpstan, rector (dry run), and phpunit
composer lint:fix  # apply rector and phpcbf fixes
```

Tests use the [Mantle Testkit](https://mantle.alley.com/docs/testing/testkit).
They run against SQLite by default, so no database server is needed. Remove
`MANTLE_USE_SQLITE` from `phpunit.xml` to run them against MySQL instead.
