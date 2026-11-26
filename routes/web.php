<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VsController;

Route::get('/', [VsController::class, 'index'])->name('home');
Route::view('/yellow', 'yellow');