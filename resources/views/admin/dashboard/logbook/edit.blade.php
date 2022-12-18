@extends('admin.layout')
@section('content')

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Assign Borrower</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Assign book to a borrower.</p>
        </div>
        <form method="POST" action="/dashboard/logbook/{{$book->id}}">
            @csrf
            @method('PUT')
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
                            <input readonly type="text" id="title" name="title" placeholder="Book Title" value="{{ $book->title }}" class="disabled:opacity-100 w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="author" class="leading-7 text-sm text-gray-600">Author</label>
                            <input readonly type="text" id="author" name="author" placeholder="Author Name" value="{{ $book->author }}" class="disabled:opacity-100 w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('author')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="year_published" class="leading-7 text-sm text-gray-600">Year Published</label>
                            <input readonly type="text" id="year_published" name="year_published" placeholder="Year" value="{{ $book->year_published }}" class="disabled:opacity-100 w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('year_published')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="user_id" class="leading-7 text-sm text-gray-600">Borrower</label>
                            <select id="user_id" name="user_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option selected>Choose a user</option>
                                @foreach($users as $user)
                                <option value="{{ $user->id }}" {{$book->user_id == $user->id  ? 'selected' : ''}}>{{ $user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('users')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">Assign Book</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection