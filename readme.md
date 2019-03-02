# Web Development with Laravel Framework (Basic) (2 March 2019)

## Installation

If you are on Windows, use [Laragon](https://laragon.org/).

If you are on Mac, use [Laravel Valet](https://laravel.com/docs/5.8/valet).

### Laravel Installer

```
$ composer global require laravel/installer
```

### New Project

```
$ laravel new project-name
```

### Initial Setup

1. Setup `.env` file 
	- Database Connection
	- E-mail
		- Production: Any Email Service Provider
		- Development: Mailtrap
2. Setup Database - create new database
3. Create login, register & forget password - `php artisam make:auth && php artisan migrate`

> Any changes on .env, do run : `php artisan config:clear`



