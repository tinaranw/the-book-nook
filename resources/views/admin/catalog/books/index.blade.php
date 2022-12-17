@extends('admin.layout')
@section('content')

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-col w-full mb-1 lg:w-11/12 md:w-11/12 mx-auto">
            <h1 class="text-left sm:text-2xl text-xl font-medium title-font mb-4 text-gray-900">Manage Books</h1>
            <a href="/catalog/books/create" class="mb-4">
                <button class="float-right block items-center bg-pink-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-500 rounded text-base mt-4 md:mt-0 text-white">
                    <i class="fa-solid fa-plus"></i> Add a new book
                </button>
            </a>


            <!-- Books-->
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Author
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Year Published
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Genre Tags
                                
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $book->title }}
                            </th>
                            <td class="py-1 px-6">
                                {{ $book->author }}
                            </td>
                            <td class="py-1 px-6">
                                {{ $book->year_published }}
                            </td>
                            <td class="py-1 px-6">
                                {{ $book->genre_tags }}
                            </td>
                            <td class="py-1 px-6">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <div>
                                    <a href="/catalog/books/{{$book->id}}/edit" class="mb-4">
                                        <button class="inline-block items-center bg-pink-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-white">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                    </a>
                                    <form method="POST" action="/catalog/books/{{$book->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="inline-block items-center bg-pink-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-white">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


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