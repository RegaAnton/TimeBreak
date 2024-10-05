<p align="center"></p>

<h1 align="center">
   <a href="https://github.com/RegaAnton/TimeBreak.git" target="_blank" align="center">
      My Portofolio
   </a>
</h1>

<p align="center">Menggunakan Bootstrap 5 sebagai Frontend Dan Laravel 11 sebagai Backend</p>

![App Screenshot](screenshoot.png)

## Introduction 🚀

Website TimeBreak yang masih dalam tahap pengembangan

## Installation ⚒️

Installing and running Sneat is super easy, please Follow below steps and you will be ready to rock 🤘

-   Open the terminal in your root directory.

-   Clone Project

```bash
git clone https://github.com/RegaAnton/TimeBreak.git
```

-   Use the following command to install the composer

```bash
composer install
```

-   Copy .env.example ke .env

```bash
cp .env.example .env
```

-   Run the following command to generate the key

```bash
php artisan key:generate
```

-   Open the env file to change the database according to the one you are using

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TimeBreak
DB_USERNAME=root
DB_PASSWORD=
```

-   Create Database

```bash
php artisan migrate:fresh
```

-   Start Project

```bash
php artisan serve
```
