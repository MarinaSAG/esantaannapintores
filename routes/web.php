<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'pages@login');

Route::post('/menu', 'pages@validarLogin');