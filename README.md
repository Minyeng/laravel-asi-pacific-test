### Setup
```hash
composer install
php artisan jwt:secret
php artisan migrate
```

### How to start
Run `php artisan serve` to start the project


### How to use
you can try this project by using postman

**API endpoints**
```
show all clients    get: /api/client/
detail client       get: /api/client/{slug}
create client       post: /api/client/create
update client       put: /api/client/update/{slug}
delete client       delete: /api/client/delete/{slug}
```
