<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::post('/send', [IndexController::class, 'sendMail'])->name('sendemail');
