<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('/', function () use ($router) {
    return $router->app->version();
});


$multifun =  function () use ($router){
        $router->get('/', 'UserController@show');
};

$multifun();
$router->group(['prefix' => 'en'], $multifun);
$router->group(['prefix' => 'sv'], $multifun);





