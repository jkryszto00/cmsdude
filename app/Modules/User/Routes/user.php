<?php

use App\Modules\User\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [UserController::class, 'index'])->name('index');
