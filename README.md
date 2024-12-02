# Simple crm

![Simple CRM dashboard screenshot](screenshots/Dashboard%20Screenshot.png "Simple CRM dashboard screenshot")

This is a small and Open-source CRM application created using the [Filament PHP](https://filamentphp.com/).

## Tech stack

-   PHP (Laravel)
-   Filament PHP

## Local Installation

1. Clone the repository
2. Run the following commands -

```bash
composer install #installing php dependencies

npm install # installing the JS dependencies

npm run build # to build the frontend assets
```

3. Replace the database credentials in the `.env` file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crm_app
DB_USERNAME=root
DB_PASSWORD=
```

4. Now run the following command to create the required tables in database -

```bash
php artisan migrate
```

Optionally, you can create the dummy data by running the seeder as -

```bash
php artisan db:seed
```

<!-- ## Need assistance?

If you need help customizing this application or want to create your own application like this, contact me on [upwork](https://www.upwork.com/services/product/consulting-hr-a-customer-crm-software-1651120102232907776?ref=project_share) or on [LinkedIn](https://www.linkedin.com/in/ishaan-s/). -->
