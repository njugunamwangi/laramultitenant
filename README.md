## About Project

# Plugins

- [Spatie Roles & Permissions](https://filamentphp.com/plugins/tharinda-rodrigo-spatie-roles-permissions).

# Tech Stack

- [Laravel](https://laravel.com).
- [FilamentPHP V3](https://filamentphp.com).

# MultiTenant Package

- [Stancl tenancy](https://github.com/archtechx/tenancy/)

## Prerequisites

- Manager route & credentials

```bash
saas.test/manager
```

```bash
email: info@manager.com
password: Password
```

- Tenant route 

```bash
saas.test/admin
```

## Installation
- Clone the repository

```bash
git clone https://github.com/njugunamwangi/saas.git
```
- On the root of the directory, copy and paste .env.example onto .env and configure the database accordingly
 ```bash
copy .env.example .env
```

- Install composer dependencies by running composer install
 ```bash
composer install
```

- Install npm dependencies
```bash
npm install
```

- Run migrations and seed the database
```bash
php artisan migrate --seed
```

- Generate laravel application key using 
```bash
php artisan key:generate
```

## License

[MIT](https://choosealicense.com/licenses/mit/)

