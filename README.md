<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Setup

This is a laravel application: to make a working copy, please do the following steps:

a more detailed setup instructions of a cloned github repository of a laravel app is available at https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/

1. Plase have the following installed in your machine: 
Apache, MySql, Php (We used XAMPP during the development)
Composer
git

2. Do the following to have a local development copy:
    1. clone this repository
        git clone https://github.com/alladinmelico/coffeeoverflow
    2. open a shell (e.g. cmd or powershell in windows) to the project directory
        e.g. cd \[path\]/coffeeoverflow
    3. Start apache and mysql service.
        if you have XAMPP installed, start the  apache and mysql from the XAMPP control panel
    4. run the following commands (assuming you have composer set up properly)
        1. composer install
        2. copy ".env.example" ".env"
        3. php artisan key:generate
    5. make a database that this application will be using:
        sample using xampp shell with default credentials:
        mysql -uroot
        create database \`coffeeoverflow\`;
    6. replace the following variables in your .env:
        DB_DATABASE=\[the database you created\]
        #port 8000 is the default port of `php artisan serve`
        APP_URL=http://localhost:8000 
        NEXMO_KEY=\[Api key from vonage (formerly nexmo)\]
        NEXMO_SECRET=\[Api secretfrom vonage (formerly nexmo)\]
        \#  if you do not have any of the variables above in .env, please put one.
    7. run the following commands:
        1. php artisan migrate
        2. php artidan db:seed
        3. php artisan serve

If you put `php artisan serve` as is,  you may type localhost:8000 on your browser and start browsing.

We also keep a running deployment of this at http://coffeeoverflow.herokuapp.com/

You may secure a Vonage/Nexmo API key on https://developer.nexmo.com/messaging/sms/overview 

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
