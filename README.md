
laraval crut для работы с контактами пользователя



comands

``` bash
composer create-project --prefer-dist laravel/laravel gis
cd gis
psql -U d991 -d gis
CREATE DATABASE GIS;

php artisan make:migration create_contacts_table --create=contacts
php artisan migrate
php artisan make:model Contact
php artisan make:controller ContactController --resource
touch app/Http/Controllers/ContactController.php
mkdir resources/views/contacts

touch  resources/views/contacts/index.blade.php resources/views/contacts/create.blade.php resources/views/contacts/edit.blade.php


php artisan serve
```
