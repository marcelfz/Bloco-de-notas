<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// auth routes

//sempre que eu entrar no endereço login, vou querer algo que exista na classe do authcontroler (um método e iremos passar o login que é o método)
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
