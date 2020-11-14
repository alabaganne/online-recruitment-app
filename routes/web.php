<?php

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
Route::get('/', function() { return view('welcome'); })->name('welcome');

use App\Http\Controllers\Auth\LoginController;
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

use App\Http\Controllers\ApplicationController;
Route::get('/dashboard', [ApplicationController::class, 'index'])->name('application.index');
Route::get('/apply', [ApplicationController::class, 'create'])->name('application.create');
Route::post('/apply', [ApplicationController::class, 'store'])->name('application.store');
Route::get('/dashboard/application/{application}', [ApplicationController::class, 'show'])->name('application.show');

