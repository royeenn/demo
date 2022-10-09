<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// controllers user
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user/store', [UserController::class, 'store']);
Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::post('user/update/{id}', [UserController::class, 'update']);
Route::get('user/delete/{id}', [UserController::class, 'delete']);

// controller tag
Route::get('tag', [TagController::class, 'index']);
Route::get('tag/create', [TagController::class, 'create']);
Route::post('tag/store', [TagController::class, 'store']);
Route::get('tag/edit/{id}', [TagController::class, 'edit']);
Route::post('tag/update/{id}', [TagController::class, 'update']);
Route::get('tag/delete/{id}', [TagController::class, 'delete']);

// controller category
Route::get('category', [CategoryController::class, 'index']);
Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/store', [CategoryController::class, 'store']);
Route::get('category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('category/update/{id}', [CategoryController::class, 'update']);
Route::get('category/delete/{id}', [CategoryController::class, 'delete']);


// controller menu
Route::get('menu', [MenuController::class, 'index']);
