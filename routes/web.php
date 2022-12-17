<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController as AdminBookController;

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
Route::get('/catalog', [AdminBookController::class, 'index']);

//Show upload a new book form
Route::get('/catalog/create', [AdminBookController::class, 'create']);

//Manage all book data
Route::get('/catalog/manage', [AdminBookController::class, 'manage']);

//Store book data
Route::post('/catalog', [AdminBookController::class, 'store']);

//Show edit a book form
Route::get('/catalog/{book}/edit', [AdminBookController::class, 'edit']);

//Update book data
Route::put('/catalog/{book}', [AdminBookController::class, 'update']);

//Delete book
Route::delete('/catalog/{book}', [AdminBookController::class, 'destroy']);




/////////
//Show single book, it must be at the bottom orelse everything else will be 404
Route::get('/catalog/{book}', [AdminBookController::class, 'show']);






