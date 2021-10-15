<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\BookController;

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

Route::get('/', [NavController::class, 'accueil']);
Route::get('accueil', [NavController::class, 'accueil']);
Route::get('contact', [NavController::class, 'contact']);
Route::get('about', [NavController::class, 'about']);

// Route::get('books', [BookController::class, 'index']);
// Route::get('books/create', [BookController::class, 'create']);
// Route::post('books', [BookController::class, 'store']);
// Route::get('books/{id}', [BookController::class, 'show']);
Route::resource('books', BookController::class);