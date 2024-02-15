# Content
> Automating folder generation in PHP can be done using the mkdir() function, which is used to create directories. Here's a brief example of how you can automatically generate folders:
- Custom PHP
- Wordpress

## Installation
>Please follow this steps, and also refer the code blocks for ths setup using php dependency  manager (composer).
Open terminal and run this command.
```sh
$ composer install
```

```sh
$ composer require sagnikrivud/php-folderaspire
```
```sh
$ composer dump-autoload
```
Use the Service Provider class at PHP file after auto  loading configuration:

```php
require __DIR__ . '/vendor/autoload.php';
```
```php
use  Sagnikd\FolderAspire\Folder;
```
```php
$folderManage = new Folder();
```
