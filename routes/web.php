<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello world!";
});

Route::get('/about', function(){
    echo "About us";
});

Route::get('/main/{value}', [MainController::class, 'index']); // rota que aponta para um método [esse método agora está apontando para um view]

// receber parâmetros nas Rotas/routes