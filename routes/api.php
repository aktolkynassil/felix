<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnifeController;

Route::resource('knives', KnifeController::class);
Route::put('/knives/{knife}', [KnifeController::class, 'update'])->name('knives.update');
