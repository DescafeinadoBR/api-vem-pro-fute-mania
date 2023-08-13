<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'users'], function () use ($router) {
    // Matches "/api/register
    $router->post('/', 'AuthController@register');

    // Matches "/api/login
    $router->post('/login', 'AuthController@login');

    // Matches "/api/profile
    $router->get('profile', 'UserController@profile');

    // Matches "/api/users/1
    //get one user by id
    $router->get('users/{id}', 'UserController@singleUser');

    // Matches "/api/users
    $router->get('/list', 'UserController@allUsers');
 });
