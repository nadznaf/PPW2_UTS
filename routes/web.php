<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;

Route::get('/pemain', [PemainController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
