<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainCotroller;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LaptopsController;
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
Route::get('/students/{id}', [StudentsController::class, 'show']);
Route::delete('/students/{id}', [StudentsController::class, 'remove']);
Route::get('/laptop_create', [LaptopsController::class, 'create']);
Route::post('/laptops', [LaptopsController::class, 'store']);
Route::get('/details', [LaptopsController::class, 'details']);
Route::get('/company', [EmployeesController::class, 'welcome']);
Route::get('/company/create', [EmployeesController::class, 'create']);
Route::post('/company', [EmployeesController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
