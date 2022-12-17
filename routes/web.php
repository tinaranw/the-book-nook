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
Route::get('/catalog', [BookController::class, 'index']);

//Show upload a new book form
Route::get('/catalog/create', [BookController::class, 'create']);

//Manage all book data
Route::get('/catalog/manage', [BookController::class, 'manage']);

//Store book data
Route::post('/catalog', [BookController::class, 'store']);

//Show edit a book form
Route::get('/catalog/{book}/edit', [BookController::class, 'edit']);

//Update book data
Route::put('/catalog/{book}', [BookController::class, 'update']);

//Delete book
Route::delete('/catalog/{book}', [BookController::class, 'destroy']);




/////////
//Show single book, it must be at the bottom orelse everything else will be 404
Route::get('/catalog/{book}', [BookController::class, 'show']);






