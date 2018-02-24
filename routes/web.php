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

$router->group(['domain' => 'http://local.salon.com/'], function() use ($router) {

    $router->group(['prefix' => 'Member'], function() use ($router) {

        $router->get('/', ['uses' => 'Home\MemberController@index', 'as' => 'MemberIndex']);

        $router->get('/credit', ['uses' => 'Home\MemberController@credit', 'as' => 'MemberCredit']);

    });

});
