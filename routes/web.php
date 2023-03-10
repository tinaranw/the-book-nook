<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\BookController as UserBookController;

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

//About page
Route::get('/about', function () {
    return view('about');
});

//Show all books
// Route::get('/catalog', [AdminBookController::class, 'index']);

//Show all books
Route::get('/catalog', [UserBookController::class, 'index']);

//Show all borrowed books
Route::get('/catalog/mybooks', [UserBookController::class, 'mybooks']);

//Borrow a book
Route::post('/catalog/borrow/{book}', [UserBookController::class, 'borrow']);

//Show login form
Route::get('/login', function () {
    return view('users.login');
})->name('login');

//User login
Route::post('/userlogin', [LoginController::class, 'userlogin']);

//Show register form
Route::get('/register', function () {
    return view('users.register');
});

//Create user
Route::post('/createuser', [RegisterController::class, 'createuser']);

//User logout
Route::post('/logout', [LoginController::class, 'logout']);

//Check if user has admin role, the user will be able to access CRUD functions
Route::group(['middleware' => ['auth', 'admin:admin']], function () {

    //Show main dashboard
    Route::get('/dashboard', [AdminBookController::class, 'dashboard']);

    //LOGBBOOK

    //Show all records
    Route::get('/dashboard/logbook', [AdminBookController::class, 'logbook']);

    //Show assign book form
    Route::get('/dashboard/logbook/{book}/assignbook', [AdminBookController::class, 'assignbook']);

    //Update log
    Route::put('/dashboard/logbook/{book}', [AdminBookController::class, 'updatelog']);

    //Change availibility status
    Route::post('/dashboard/logbook/makeavailable/{book}', [AdminBookController::class, 'makeavailable']);

    //Change availibility status
    Route::post('/dashboard/allowborrow/{book}', [AdminBookController::class, 'allowborrow']);

    //BOOKS

    //Show all books
    Route::get('/dashboard/books', [AdminBookController::class, 'index']);

    //Show upload a new book form
    Route::get('/dashboard/books/create', [AdminBookController::class, 'create']);

    //Store book data
    Route::post('/dashboard/books', [AdminBookController::class, 'store']);

    //Show edit a book form
    Route::get('/dashboard/books/{book}/edit', [AdminBookController::class, 'edit']);

    //Update book data
    Route::put('/dashboard/books/{book}', [AdminBookController::class, 'update']);

    //Delete book
    Route::delete('/dashboard/books/{book}', [AdminBookController::class, 'destroy']);

    //Show book details
    Route::get('/dashboard/books/{book}', [AdminBookController::class, 'show']);

    //USERS

    //Show all users
    Route::get('/dashboard/users', [RegisterController::class, 'index']);

    //Show create user form
    Route::get('/dashboard/users/create', function () {
        return view('admin.dashboard.user.create');
    });

    //Create user
    Route::post('/dashboard/users/admincreateuser', [RegisterController::class, 'admincreateuser']);

    //Show edit user form
    Route::get('/dashboard/users/{user}/edit', [RegisterController::class, 'edit']);

    //Update user data
    Route::put('/dashboard/users/{user}', [RegisterController::class, 'update']);

    //Delete user data
    Route::delete('/dashboard/users/{user}', [RegisterController::class, 'destroy']);
});

/////////
//Show single book, it must be at the bottom orelse everything else will be 404
Route::get('/catalog/{book}', [UserBookController::class, 'show']);
