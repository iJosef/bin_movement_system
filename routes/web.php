<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {App\Http\Controllers\Auth\LoginController@showLoginForm 
//     return view('welcome');
// });

// Route::get ('/dashboard', [PagesController::class, 'dashboard']);

Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm' ]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/bin_movements', [PagesController::class, 'bin_movements'])->name('bin_movements');
Route::get('/my_tasks', [PagesController::class, 'my_tasks'])->name('my_tasks');
