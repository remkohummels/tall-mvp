# TALL Stack MVP (Tailwind CSS, Alpine.js, Laravel, Livewire)
***

The beta version for students management system.

Key Technologies:

- Laravel v9.19

- Livewire v2.5

- Tailwindcss v3.1.0

- Alpinejs v3.0.6

- Sendgrid v8.0

- DEV/Staging environments is compatible with Linux/Debian, MacOS, Windows 10.

## Prerequisites for LAMP(Linux/Apache/MySQL/PHP) stack

1) Install PHP 8.0 or 8.1 (reference: [installation in ubuntu](https://computingforgeeks.com/how-to-install-php-on-ubuntu-2/))

2) Install MySQL v8.0 (reference: [installation in ubuntu](https://computingforgeeks.com/how-to-install-mysql-8-on-ubuntu/))

3) Install Apache2 (reference: [installation in ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-20-04))

4) Install Composer (reference: [installation in ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04))

5) Install Node.js v14.x (reference: [installation in ubuntu](https://computingforgeeks.com/install-node-js-14-on-ubuntu-debian-linux/))

6) Upgrade Npm to v6.x (`$ sudo npm install npm -g`)

7) Install php extensions

- In the case of PHP v8.0 (`$ sudo apt-get install php8.0-fpm php8.0-dom php8.0-intl php8.0-mbstring php8.0-xml php8.0-mysql php8.0-curl php8.0-mcrypt php8.0-cli php8.0-dev php8.0-zip php8.0-gd`)

- In the case of PHP v8.1 (`$ sudo apt-get install php8.1-fpm php8.1-dom php8.1-intl php8.1-mbstring php8.1-xml php8.1-mysql php8.1-curl php8.1-mcrypt php8.1-cli php8.1-dev php8.1-zip php8.1-gd`)

## Application Setup in the Dev Environment

In the case of LAMP usage...

Clone git@bitbucket.org:xxx/laravel-vue-mvp.git repository to laravel-vue-mvp folder, checkout your dev branch (or staging branch)

In the /tall-mvp folder,

1) Create a .env file copying from .env.dev or .env.example.

2) Run `$ composer install` to install the necessary dependencies.

3) Run `$ npm install --force` to install the node modules & libraries by NPM.

4) Run `$ npm run dev` to compile the JS/SCSS into a single files by Laravel Mix + Webpack.

5) Run `$ php artisan config:cache` to reflect the .env configuration.

6) Execute the SQL dump file into the local database.

## Running the application with LAMP stack on localhost

Clone git@bitbucket.org:xxx/laravel-vue-mvp.git repository to tall-mvp folder, checkout your dev branch (or staging branch)

In the /tall-mvp folder,

- File permissions (`$ sudo chmod -R 777 storage bootstrap/cache`)

- Create Apache VirtualHost. (reference: [configuration in ubuntu](https://tecadmin.net/install-laravel-framework-on-ubuntu/))

## Command Line Tools

- nodejs: v14.x

- NPM: v6.x

- git: v2.13.0

## Coding Style

- Use [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and [PSR-4](http://www.php-fig.org/psr/psr-4/) coding standards.

- PHP tab size is 4.

- Blade/HTML tab size is 2.

- SCSS/JavaScript tab size is 4.

- Translate tabs to spaces.

- Ensure newline at end of file.

- Trim trailing white space.
