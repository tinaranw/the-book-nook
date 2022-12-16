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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

//Welcome homepage
Route::get('/', function () {
    return view('welcome');
});

//Show all books
Route::get('/catalogue', [BookController::class, 'index']);

//Show upload a new book form
Route::get('/catalogue/create', [BookController::class, 'create']);

//Show single book, it must be at the bottom orelse everything else will be 404
Route::get('/catalogue/{book}', [BookController::class, 'show']);

//Store book data
Route::post('/catalogue', [BookController::class, 'store']);




