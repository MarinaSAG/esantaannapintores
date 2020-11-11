<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'pages@login');

Route::post('/menu', 'pages@validarLogin');

//------------//------------//------------//

Route::get('/home', [
    'uses' => 'pages@menu',
    'as' => 'home'
]);

Route::get('/manuel-felguerez', [
    'uses' => 'pages@manuelFelguerez',
    'as' => 'ManuelFelguerez'
]);

Route::get('/leonid-afremov', [
    'uses' => 'pages@leonidAfremov',
    'as' => 'leonidAfremov'
]);

Route::get('/jean-leon-gerome', [
    'uses' => 'pages@jeanLeonGerome',
    'as' => 'jeanLeonGerome'
]);

Route::get('/carlos-bazan', [
    'uses' => 'pages@carlosBazan',
    'as' => 'CarlosBazan'
]);

