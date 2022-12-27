Aplikasi CRUD dengan AdminLTE

## About Me

Nama : Ridwan Gunawan
Kelas : IF C 2020
NPM : 5520120006
UNIV : Universitas Suryakancana Cianjur

## About this Project

Pada projek laravel ini kita menggunakan template dashboard admin yaitu AdminLTE, disini terdapat multilevel user dan kita bisa melakukan crud data buku jika login sebagai admin, dan kita tentu bisa logout

## How to Install this Project

-   Run `git clean  -d  -fx .`
-   Run `composer install`
-   Run `copy .env.example .env`
-   Run `php artisan key:generate`
-   Buat database dan sesuaikan dengan yang ada di `.env` file
-   Run `php artisan migrate`
-   Run `php artisan db:seed`
-   Run `php artisan storage:link`
-   Buat folder `cover_buku` di folder `public`
-   Run `php artisan serve`

## Install this Project from Beginning

cara instalasi :

Install Laravel

-   Install composer
-   composer create-project laravel/laravel nama_projek
-   cd coba-laravel
-   php artisan serve
-   salin link http://127.0.0.1:8000
-   copy link ke browser

Integrasi dengan AdminLTE

-   composer require jeroennoten/laravel-adminlte
-   composer require laravel/ui
-   php artisan ui bootstrap --auth
-   npm install
-   npm run dev
-   php artisan adminlte:install
-   php artisan adminlte:plugins install
-   php artisan adminlte:install --only=main_view
-   php artisan adminlte:install --only=auth_view
-   konfigurasi menu di
    config/adminlte.php
-   konfigurasi menu lanjutan di
    app/Providers/AuthServiceProvider.php
-   konfigurasi plugins di
    config/admin.php

Otentikasi

-   mengambil data user
-   middleware untuk pengecekan pengguna di
    /routes/web.php
-   konfigurasi database di
    .env
-   php artisan make:model User --migration
-   php artisan make:model Role --migration
-   isi struktur tabelnya
-   php artisan migrate
-   php artisan make:midleware IsAdmin
-   membuat middleware untuk admin di
    app/Http/middleware/IsAdmin.php
-   daftarkan middleware IsAdmin pada kernel di
    app/Http/Kernel.php
-   route admin di
    routes/web.php
-   php artisan make:controller AdminController
-   modifikasi HomeController dan AdminController
    app/Http/Controllers/HomeController.php
    app/Http/Controllers/ AdminController.php
-   pengaturan view hak akses
    resources/view/home.blade.php
-   pengaturan loginController
    app/Http/Controllers/Auth/ LoginController.php
-   php artisan make:seeder CreateUserSeeder
-   isi seeder
-   php artisan db:seed --class=CreateUserSeeder
-   php artisan db:seed --class=CreateRoleSeeder
-   membuat gates
    app/Providers/AuthServicesProvider.php

Pengolahan Data

-   npm install sweetalert2
-   akses CDN
-   penambahan source css dan js
    resources/view/vendor/adminlte/master.blade.php
-   konfigurasi base url dan plugins DataTable
    resources/view/vendor/adminlte/master.blade.php
-   php artisan make:model Book --migration
-   isi struktur tabelnya
-   php artisan migrate
-   menampilkan data
    config/adminlte.php
-   mengatur controller construct
    app/Http/Controllers/AdminController.php
-   mengatur view book
    resource/views/book.blade.php
-   Mengatur route view admin book
    routes.web.php
-   menambah data
-   mengatur storage
-   php artisan storage:link
    public/cover_buku
-   mengatur route post admin book
    routes.web.php
-   mengatur view pengolahan data
    resource/views/book.blade.php
-   mengatur controller submit book
    app/Http/Controllers/AdminController.php
-   mengubah data
-   Mengatur route update book
    routes.web.php
-   mengatur view update
    resource/views/book.blade.php
-   mengatur ajax
-   buat sintaks js
    resource/views/book.blade.php
-   mengatur route ajax
    routes.web.php
-   tambahkan fungsi getDataBuku pada controller
    app/Http/Controllers/AdminController.php
-   megatur controller update_book
-   menghapus data
-   megatur route delete
    routes.web.php
-   mengatur view delete
    resource/views/book.blade.php
-   mengatur js
-   mengatur controller delete

Print to PDF

-   composer require barryvdh/laravel-dompdf
-   mengatur view pdf
-   mengatur controller pdf
-   mengatur view pdf

Export import excel

-   composer require “ext-gd:\*” --ignore-platform-req=ext-gd
-   composer require mmatwebsite/excel
-   registrasi pada provider dan alias
    config/app.php
-   membuat export class
-   php artisan make:export BooksExport --model=Book
-   mengatur controler export
-   mengatur route export
-   membuat tombol export
-   modifikasi data excel
    app/Models/Book.php
-   mengubah proses eksport
    app/Exports/BooksExport.php
-   import data
-   membuat import class
-   php artisan make:import BooksImport --model=Book
-   mengubah proses import
    app/ Import /BooksImport.php
-   mengatur model
    app/Models/Book.php
-   mengatur controler import
-   mengatur route import
-   menatur view import

Rest API

-   composer require laravel/sanctum
-   php artisan vendor:publish --provider=”Laravel\Sanctum\SanctumServiceProvider”
-   php artisan migratemenambahkan sanctum middleware pada api middleware
    app/Http/Kernel.php
-   kofigurasi token api
    app/Models/User.php
-   Otentikasi
    routes/api.php
-   php artisan make:controller API/AuthController
-   buat fungsi login
-   app/Http/Controller/API/AuthController
-   buka postman
-   login
-   ubah method jadi post
-   menambahkan url
-   menambahkan format json
-   isi form-data
-   CRUD API
-   php artisan make:controller API/BookController
-   Mengambil data
-   tambah route ambil
-   tambah fungsi book
-   get
-   Authorization Bearer Token isi
-   Menambah data
-   tambah route tambah
-   tambah fungsi tambah
-   isi form-data
-   post
-   Authorization Bearer Token isi
-   mengubah data
-   tambah route ubah
-   tambah fungsi ubah
-   isi form-data
-   post dan link id
-   Authorization Bearer Token isi
-   menghapus data
-   tambah route hapus
-   tambah fungsi hapus
-   post dan link id
-   Authorization Bearer Token isi
