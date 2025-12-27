<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.users.index');
});

Route::prefix('admin')->group(function () {
    Route::resource('users', UserController::class);
});