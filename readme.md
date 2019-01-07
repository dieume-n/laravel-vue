## About Task List

> Laravel 5.6 and VueJS app. This is a simple Task-list application that displays all Tasks that you've added to your task list.


## Quick setup

``` bash
# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# If you get an error about an encryption key
php artisan key:generate
```

## Endpoints

### Register an account
``` bash
/register
```
### Login
``` bash
/login
```

### Display and add Tasks to the task list
``` bash
/home
```

## App Info

### Author

Luteranya Nyange

### Version

1.0.0

### License

This project is licensed under the MIT License

NB: Task are not  per user basis i.e when a Task is created all users can see it.

