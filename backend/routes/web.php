<?php

// use Illuminate\Support\Facades\Route;

$router->get('/', function () {
    return view('welcome');
});

$router->group(['prefix' => 'robots'], function () use ($router) {
    $router->get('list', ['uses' =>  'dictController@getRobots']);
    $router->get('list2', [dictController::class, 'getRobots']);
});

$router->get('/frontend', function () {
    return view('index_combat');
});