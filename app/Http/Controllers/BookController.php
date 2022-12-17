<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use App\Models\Book as Book;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.catalog.index', [
            //Function in Listing Model
            // 'books' => Book::all()
            'books' => Book::latest()->filter(request(['genre_tags', 'search']))->paginate(6)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.create');
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

        // dd($formFields);

        Book::create($formFields);

        return redirect('/catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        return view('user.catalog.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        return view('admin.catalog.edit', ['book' => $book]);
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

        return redirect('/catalog');
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
        return redirect('/manage');
    }

    /* Manage book data for admin side */
     public function manage()
     {
        // dd("hai");
        return view('admin.catalog.manage', [
            'books' => Book::all()
        ]);
     }
}
