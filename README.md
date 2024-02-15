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

---
## 💻 Tech Stack
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=plastic&logo=css3&logoColor=white) ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=plastic&logo=php&logoColor=white) ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=plastic&logo=html5&logoColor=white) ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=plastic&logo=javascript&logoColor=%23F7DF1E) ![AWS](https://img.shields.io/badge/AWS-%23FF9900.svg?style=plastic&logo=amazon-aws&logoColor=white) ![Vue.js](https://img.shields.io/badge/vuejs-%2335495e.svg?style=plastic&logo=vuedotjs&logoColor=%234FC08D) ![Vuetify](https://img.shields.io/badge/Vuetify-1867C0?style=plastic&logo=vuetify&logoColor=AEDDFF) ![NPM](https://img.shields.io/badge/NPM-%23000000.svg?style=plastic&logo=npm&logoColor=white) ![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=plastic&logo=jquery&logoColor=white) ![Express.js](https://img.shields.io/badge/express.js-%23404d59.svg?style=plastic&logo=express&logoColor=%2361DAFB) ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=plastic&logo=laravel&logoColor=white) ![NuxtJS](https://img.shields.io/badge/Nuxt-black?style=plastic&logo=nuxt.js&logoColor=white) ![Socket.io](https://img.shields.io/badge/Socket.io-black?style=plastic&logo=socket.io&badgeColor=010101) ![Apache](https://img.shields.io/badge/apache-%23D42029.svg?style=plastic&logo=apache&logoColor=white) ![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=plastic&logo=mariadb&logoColor=white) ![MongoDB](https://img.shields.io/badge/MongoDB-%234ea94b.svg?style=plastic&logo=mongodb&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=plastic&logo=mysql&logoColor=white) ![SQLite](https://img.shields.io/badge/sqlite-%2307405e.svg?style=plastic&logo=sqlite&logoColor=white) ![Inkscape](https://img.shields.io/badge/Inkscape-e0e0e0?style=plastic&logo=inkscape&logoColor=080A13) ![Jira](https://img.shields.io/badge/jira-%230A0FFF.svg?style=plastic&logo=jira&logoColor=white) ![Vagrant](https://img.shields.io/badge/vagrant-%231563FF.svg?style=plastic&logo=vagrant&logoColor=white)
![Shell](https://img.shields.io/badge/shell-%231563FF.svg?style=plastic&logo=shell&logoColor=white) ![Cakephp](https://img.shields.io/badge/cakephp-%23FF2D20.svg?style=plastic&logo=cakephp&logoColor=white) ![Arduino](https://img.shields.io/badge/arduino-%231563FF.svg?style=plastic&logo=arduino&logoColor=white) ![Bash](https://img.shields.io/badge/c++-%231563FF.svg?style=plastic&logo=c++&logoColor=white)

