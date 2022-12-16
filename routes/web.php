<?php

use App\Http\Controllers\BookController;
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

//Welcome homepage
Route::get('/', function () {
    return view('welcome');
});

//Show all books
Route::get('/catalogue', [BookController::class, 'index']);

//Show single book
Route::get('/catalogue/{book}', [BookController::class, 'show']);


