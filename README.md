https://tailflow.github.io/laravel-orion-docs/guide/getting-started.html#simple-crud

composer require tailflow/laravel-orion

php artisan make:model Substance -mf

To quickly generate an API resource controller that does not include the create or edit methods, use the --api switch when executing the make:controller command:

php artisan make:controller Api/SubstanceController --api

or

php artisan make:controller Api/SubstanceController --resource --model=Substance

php artisan route:list

making a policy:

The make:policy command will generate an empty policy class. If you would like to generate a class with the basic "CRUD" policy methods already included in the class, you may specify a --model when executing the command:

php artisan make:policy PostPolicy --model=Post

php artisan make:policy SubstancePolicy --model=Substance

in controller class:

use DisableAuthorization; // it doesn't give back 403 unautorized.

search: is not working

{
"search" : {
"value" : "painkiller"
},
"sort" :
{"field" : "id", "direction" : "asc"}
}
