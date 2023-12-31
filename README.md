<p align="center"><a href="#"><img src="./public/assets/images/beauty-logo.png" width="300" alt="Beauty Logo"></a></p>

## Beauty Shop

🌸 Beauty Shop adalah situs web yang menyediakan berbagai produk kecantikan, termasuk skincare, makeup, dan lainnya. Website ini dikembangkan dengan menggunakan framework Laravel 10 dan Tailwind CSS.

## Requirements Installation

requirement:

-   PHP >= 8.1
-   [Composer](https://getcomposer.org/download/)
-   [Node.js](https://nodejs.org/en/download/)
-   [Vscode](https://code.visualstudio.com/download)
-   [Xampp](https://www.apachefriends.org/download.html)
-   [Git](https://git-scm.com/downloads)

Vscode Extension:

-   Laravel Extension Pack
-   Tailwind CSS Extension Pack
-   PostCSS Language Support

## How to install

1. Clone repository

```sh
git clone https://github.com/alimurrofid/beautyshop.git
```

2. Install & Update Composer

```sh
composer update
```

3. Copy .env.example to .env

```sh
copy .env.example .env
```

4. Generate Key

```sh
php artisan key:generate
```

5. Migration database

```sh
php artisan migrate
```

6. Seeding database

```sh
php artisan db:seed
```

7. Create the symbolic link

```sh
php artisan storage:link
```

8. Intall npm

```sh
npm install -D tailwindcss postcss autoprefixer flowbite
```

9. Install tailwindcss

```sh
npx tailwindcss init -p
```

10. Run npm

```sh
npm run dev
```

11. Run laravel

```sh
php artisan serve
```
