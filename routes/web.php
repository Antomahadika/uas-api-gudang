<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //categories
    $router->get('/categories', 'categoriesController@index');
    $router->get('/categories/{id}', 'categoriesController@show');
    $router->post('/categories', 'categoriesController@store');
    $router->put('/categories/{id}', 'categoriesController@update');
    $router->delete('/categories/{id}', 'categoriesController@destroy');
    //issuing
    $router->get('/issuing', 'issuingController@index');
    $router->get('/issuing/{id}', 'issuingController@show');
    $router->post('/issuing', 'issuingController@store');
    $router->put('/issuing/{id}', 'issuingController@update');
    $router->delete('/issuing/{id}', 'issuingController@destroy');
    //items
    $router->get('/items', 'itemsController@index');
    $router->get('/items/{id}', 'itemsController@show');
    $router->post('/items', 'itemsController@store');
    $router->put('/items/{id}', 'itemsController@update');
    $router->delete('/items/{id}', 'itemsController@destroy');
    //receiving
    $router->get('/receiving', 'receivingController@index');
    $router->get('/receiving/{id}', 'receivingController@show');
    $router->post('/receiving', 'receivingController@store');
    $router->put('/receiving/{id}', 'receivingController@update');
    $router->delete('/receiving/{id}', 'receivingController@destroy');
    //suppliers
    $router->get('/suppliers', 'suppliersController@index');
    $router->get('/suppliers/{id}', 'suppliersController@show');
    $router->post('/suppliers', 'suppliersController@store');
    $router->put('/suppliers/{id}', 'suppliersController@update');
    $router->delete('/suppliers/{id}', 'suppliersController@destroy');


});