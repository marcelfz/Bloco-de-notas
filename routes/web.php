<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello world!";
});

Route::get('/about', function(){
    echo "About us";
});

Route::get('/main', [MainController::class, 'index']); // rota que aponta para um método
