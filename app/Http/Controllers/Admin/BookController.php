<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book as Book;
use App\Models\User as User;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.books.index', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebookRequest $request)
    {
        //Data Validation
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('books', 'title')],
            'author' => 'required',
            'year_published' => 'required',
            'genre_tags' => 'required',
            'synopsis' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('cover_image')) {
            $formFields['cover_image'] = $request->file('cover_image')->store('cover_image', 'public');
        }

        Book::create($formFields);

        return redirect('/dashboard/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        // return view('user.catalog.show', [
        //     'book' => $book
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        return view('admin.dashboard.books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookRequest  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebookRequest $request, book $book)
    {
        //Data Validation
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year_published' => 'required',
            'genre_tags' => 'required',
            'synopsis' => 'required',
            'description' => 'required',
        ]);

        $book->update($formFields);

        return redirect('/dashboard/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect('/dashboard/books');
    }

    /* Manage book data for admin side */
    public function dashboard()
    {

        //Get all borrowed books
        $books = Book::where('status', '1')->get();

        //Check current date
        $now = Carbon::now();

        //Get all users
        $users = User::all();

        return view('admin.index')->with(compact('books', 'users', 'now'));
    }

    /* See logbook */
    public function logbook()
    {

        //Get all books
        $books = Book::all();

        //Get all borrowed books
        $borrowedbooks = Book::where('status', '1')->get();

        //Check current date
        $now = Carbon::now();

        //Get all users
        $users = User::latest();

        return view('admin.dashboard.logbook.index')->with(compact('books', 'borrowedbooks', 'users', 'now'));
    }

    public function assignbook(book $book)
    {
        //Get all users
        $users = User::all();

        //Get all books
        $books = Book::all();
        return view('admin.dashboard.logbook.edit')->with(compact('books', 'book', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookRequest  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function updatelog(UpdatebookRequest $request, book $book)
    {

        //Data Validation
        $formFields = $request->validate([
            'user_id' => 'required',
        ]);
        $book->status = '1';
        //Log day 
        $book->date_borrowed = Carbon::now()->format('Y-m-d H:i:s');
        //Add Due Date
        $book->date_returned = Carbon::now()->addDays(7);

        // dd($formFields['user_id']);

        $book->update($formFields);

        return redirect('/dashboard/logbook');
    }

    public function makeavailable(book $book)
    {

        //Log day 
        $book->date_borrowed = null;

        //Add Due Date
        $book->date_returned = null;

        //Change user
        $book->user_id = null;

        //Change status
        $book->status = "0";

        //Update book data
        $book->save();

        return redirect('/dashboard/logbook');
    }
}
