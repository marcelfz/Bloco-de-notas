<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged;
use Illuminate\Support\Facades\Route;

// auth routes

//sempre que eu entrar no endereço login, vou querer algo que exista na classe do authcontroler (um método e iremos passar o login que é o método)
Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

Route::middleware([CheckIsLogged::class])->group(function(){
    Route::get('/', [MainController::class, 'index']);
    Route::get('/newNote', [MainController::class, 'newNote']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

