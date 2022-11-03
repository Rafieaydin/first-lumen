<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\UserController;

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
    
// $router->get('/user',[UserController::class,'index']); // erorr (harus make keong)
$router->get('/user','UserController@index');
$router->post('/user','UserController@store');
$router->get('/user/{id}','UserController@findByid');
$router->put('/user/{id}/update','UserController@update');
$router->delete('/user/{id}/delete','UserController@delete');



