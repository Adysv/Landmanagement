<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainCotroller;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {

    return view('welcome');
});

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::post('/students', [StudentsController::class, 'store']);
Route::get('/students/{id}', [StudentsController::class, 'show'])->middleware('auth');
Route::delete('/students/{id}', [StudentsController::class, 'remove']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
composer create-project laravel/laravel ProgiTech --prefer-dist