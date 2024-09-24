<?php

use App\Http\Controllers\CameraController;
use App\Http\Controllers\IpLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [IpLoginController::class, 'showLoginForm'])->name('ip.login');
Route::post('/login', [IpLoginController::class, 'signIn']);

Route::get('/video', [CameraController::class, 'showImage']);
