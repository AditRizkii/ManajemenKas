## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

-   Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
-   Linux & Mac: https://updivision.com/blog/post/guide-what-is-lamp-and-how-to-install-it-on-ubuntu-and-macos

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md  
And Laravel: https://laravel.com/docs/10.x

## Installation

1.Unzip the downloaded archive and then open the folder

2.In your terminal run composer install

3.Copy `.env.example` to `.env` and updated the configurations (mainly the database configuration)

4.In your terminal run `php artisan key:generate`

5.Run `php artisan migrate --seed` to create the database tables and seed the roles and users tables

6.Run `php artisan storage:link` to create the storage symlink (if you are using Vagrant with Homestead for development, remember to ssh into your virtual machine and run the command from there).
