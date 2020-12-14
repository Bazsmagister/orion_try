https://tailflow.github.io/laravel-orion-docs/guide/getting-started.html#simple-crud

composer require tailflow/laravel-orion

php artisan make:model Substance -mf

To quickly generate an API resource controller that does not include the create or edit methods, use the --api switch when executing the make:controller command:

php artisan make:controller Api/SubstanceController --api

or

php artisan make:controller Api/SubstanceController --resource --model=Substance

php artisan route:list

making a policy:

php artisan make:policy PostPolicy --model=Post

php artisan make:policy SubstancePolicy --model=Substance
