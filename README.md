#Laravel Passport tutorial

##Overview

This tutorial aims to provide a simple laravel passport implementation using client grant tokens. 

The project uses a custom product api to list product information whenever the `/api/products` endpoint is accessed.

The /products endpoint represents a 1st party application which uses the product api. To enhance the security of this dummy application the `/api/products` endpoint has been protected using laravel passport's client middleware.

For more information regarding laravel passport please visit the official documentation https://laravel.com/docs/7.x/passport#client-credentials-grant-tokens.



##How to use
1. git clone this repo
2. `composer install`
3. `cp .env.example .env`
4. open the .env file and set the following variables:  
`REDIS_HOST=redis`  
`CACHE_DRIVER=redis`  
`DB_HOST=database`  
`DB_PASSWORD=secret`  
`PRODUCT_API_GRANT_TYPE=client_credentials`
5. `sudo chmod 777 -R storage/`
6. `php artisan key:generate`
7. `docker-compose exec php php artisan passport:install`
8. `docker-compose exec php php artisan db:seed`
9. `docker-compose exec php php artisan passport:client --client`
10. The command above should have generated a client id and client secret. These need adding to your .env file as the following:  
`PRODUCT_API_CLIENT_ID={YOUR_CLIENT_ID}`  
`PRODUCT_API_CLIENT_SECRET={YOUR_CLIENT_SECRET}`
11. Visit http://localhost:8080/products and you should see a list of fake products
