# PHP Directory & File Manager 
> Automating folder generation in PHP can be done using the mkdir() function, which is used to create directories. Here's a brief example of how you can automatically generate folders:
- Custom PHP
- Wordpress

<!-- [![My LinkedIn Profile](https://media.licdn.com/dms/image/C5603AQEC8ch_Z-bmpg/profile-displayphoto-shrink_200_200/0/1589660737782?e=2147483647&v=beta&t=bkzNsi69jrmxF804_L0f7GsGYKj8_BP_mDu4pF9wg20)](https://in.linkedin.com/in/sagnik-dey-483423a9) -->

# Versions and compatibility

- [Php 8.0]() or higher is required
- [Apache 2]()

## Status
### <img src="https://image.similarpng.com/very-thumbnail/2021/06/Hazard-warning-attention-sign-with-exclamation-mark-symbol-on-transparent-background-PNG.png" alt="Note" width="18" title="Please check status">Under Development

## Installation
>Please follow this steps, and also refer the code blocks for ths setup using php dependency  manager (composer).
Open terminal and run this command, but this is need to remember that the user file or folder write permission should be given under same group, like user: sudo and group: www-data

>in composer.json under require you can directly write "sagnikrivud/php-folderaspire" under require and run:
```sh
$ composer install
```
OR

>You can directly run from terminal
```sh
$ composer require sagnikrivud/php-folderaspire
```
<!-- ```sh
$ composer dump-autoload
``` -->
Use the Service Provider class at PHP file after auto  loading configuration:

```php
require __DIR__ . '/vendor/autoload.php';
```
```php
use  Sagnikd\FolderAspire\Folder;
```
```php
$manageFolder = new Folder();
```
> create a folder with permission
```php
$manageFolder->createDirectory('path/to/directory_name', 775); //Return true/false
```
> Import directory from an existing parent directory
```php
$manageFolder->importDirectory('source/dir','destination/dir');
```

> Get proper location or Path of a Folder or File
```php
$manageFolder->getFolderLocation('folderName/fileName'); //Return "/FolderAspire/Config/Label.php"
```

> Get a Namespace of Class or Service provider
```php
$manageFolder->recoverNamespace(null,'path/to/class_file'); //Return "App\Http\Controllers"
```
> Lock a directory
```php
$manageFolder->lockDirectory('folder', 'path/to/folder'); //Return true/false
```

> Base/root directory
```php
'Base' => env('BASE_ROOT', __DIR__),
```
