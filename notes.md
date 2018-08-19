1. Create Laravel project

`composer create-project --prefer-dist laravel/laravel mylaravel`

2. List make command by Artisan

`php artisan list make`

3. Migrate commands

`php artisan migrate:refresh --seed`

4. Create controller with model name

`php artisan make:controller Product/ProductController -r -m Product`

5. Create mail file

`php artisan make:mail UserCreated`

6. Create markdown Test email

`php artisan make:mail Test -m emails.test`

# Questions

1. What is API Scope? Global scope? Why?
2. What is Traits? Why?
3. What is function boot()?
4. Call a route at frontend with Route name?

# Note

1. Change .env variable need to re-run `php artisan serve`.



