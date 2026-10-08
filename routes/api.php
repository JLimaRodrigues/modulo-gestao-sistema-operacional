<?php

use App\Http\Controllers\Api\RedeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/redes', [RedeController::class, 'index']);
Route::post('/redes', [RedeController::class, 'store']);
Route::get('/redes/teste', [RedeController::class, 'storeTeste']);