<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChannelsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::get('/channels', [ChannelsController::class, 'index']);
Route::get('/channels/{channel}', [ChannelsController::class, 'show']);

Route::get('/videos', [VideoController::class, 'index']);
Route::get('/videos/{video}', [VideoController::class, 'show']);


