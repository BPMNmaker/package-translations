# Processmaker Package Translations
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/package-translations.git
cd package-translations
php rename-project.php package-translations
composer install
npm install
npm run dev
```

## Installation
* Use `composer require BPMNmaker/package-translations` to install the package.
* Use `php artisan package-translations:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan package-translations:uninstall` to uninstall the package
* Use `composer remove BPMNmaker/package-translations` to remove the package completely
