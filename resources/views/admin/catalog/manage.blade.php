@extends('admin.layout')
@section('content')
<div class="flex justify-center p-6">
    <div class="block rounded-lg bg-white min-w-full">
        <a href="/catalog/create">
            <button class="block items-center bg-pink-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-white">
                <i class="fa-solid fa-plus"></i> Add a new book
            </button>
        </a>
    </div>
</div>


<div class="flex justify-center p-6">
    <div class="block p-6 rounded-lg border-2 border-gray-100 bg-white min-w-full">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">



                        <!-- Books Table -->
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Year Published</td>
                                    <td>Genre Tags</td>
                                    <!-- <td>Synopsis</td>
                                                        <td>Description</td> -->
                                    <!-- <td>Status</td>
                                                        <td>Lent to</td>
                                                        <td>Date Borrowed</td>
                                                        <td>Date Returned</td> -->
                                    <td>Action</td>

                                </tr>
                            </thead>
                            @foreach($books as $book)
                            <tr>
                                <td class="py-2">
                                    <p class="text-xs">{{ $book->title }}</p>
                                </td>
                                <td class="py-2">
                                    <p class="text-xs">{{ $book->author }}</p>
                                </td>
                                <td class="py-2">
                                    <p class="text-xs">{{ $book->year_published }}</p>
                                </td>
                                <td class="py-2">
                                    <p class="text-xs">{{ $book->genre_tags }}</p>
                                </td>
                                <!-- <td>{{ $book->synopsis }}</td>
                                                    <td>{{ $book->description }}</td> -->
                                <!-- <td class="py-2">
                                                        <p class="text-xs">{{ $book->status }}</p>
                                                    </td> -->
                                <!-- <td class="py-2">
                                                        <p class="text-xs">{{ $book->user_id }}</p>
                                                    </td>
                                                    <td class="py-2">
                                                        <p class="text-xs">{{ $book->date_borrowed }}</p>
                                                    </td>
                                                    <td class="py-2">
                                                        <p class="text-xs">{{ $book->date_returned }}</p>
                                                    </td> -->
                                <td class="py-2">

                                    <form method="POST" action="/catalog/{{$book->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="inline-flex items-center bg-pink-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-white">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>


                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer-->
<footer class="text-gray-600 body-font fixed bottom-0">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <img src="{{ asset('images/logo.png') }}" class="object-cover h-6 w-12" />
            <span class="ml-3 text-xl">The Book Nook</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 The Book Nook —
            <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@thebooknook.id</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>
            <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
            </a>
        </span>
    </div>
</footer>
@endsection