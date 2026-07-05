<?php

use App\Http\Controllers\NotificationCaontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('/student', StudentController::class);
Route::resource('/product', ProductController::class);

Route::get('ts', [NotificationCaontroller::class, 'index']);
Route::get('ts/{type}', [NotificationCaontroller::class, 'notification'])->name("notification");


