@extends('admin.layout')
@section('content')
<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-col w-full mb-1 lg:w-11/12 md:w-11/12 mx-auto">
            <h1 class="text-left sm:text-2xl text-xl font-medium title-font mb-4 text-gray-900">Current Borrowed Books</h1>

            <!-- Borrowed Books -->
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="py-3 px-6">
                                Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Borrowed by
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Borrowed Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Due Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Past Due Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($borrowedbooks as $book)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $book->title }}
                            </th>
                            <td class="py-1 px-6">
                                {{ $book->user->name }}
                            </td>
                            <td class="py-1 px-6">
                                {{ $book->date_borrowed }}
                            </td>
                            <td class="py-1 px-6">
                                {{ $book->date_returned }}
                            </td>
                            <td class="py-1 px-6">

                                @if($now->between($book->date_borrowed, $book->date_returned))
                                <p class="font-bold"> No </p>
                                @elseif($book->date_borrowed == null && $book->date_returned ==null)
                                <p class="font-bold text-red-500"> - </p>
                                @else
                                <p class="font-bold text-red-500"> Yes </p>
                                @endif

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</section>

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-12 pt-0 mx-auto">
        <div class="flex flex-col w-full mb-1 lg:w-11/12 md:w-11/12 mx-auto">
            <h1 class="text-left sm:text-2xl text-xl font-medium title-font mb-4 text-gray-900">All Books</h1>

            <!-- Borrowed Books -->
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="py-3 px-6">
                                Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Borrowed by
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Borrowed Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Due Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Past Due Date
                            </th>
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
                                @if($book->status == '0')
                                -
                                @else
                                {{ $book->user->name }}
                                @endif
                            </td>
                            <td class="py-1 px-6">
                                @if($book->date_borrowed == null)
                                -
                                @else
                                {{ $book->date_borrowed }}
                                @endif
                            </td>
                            <td class="py-1 px-6">
                                @if($book->date_returned == null)
                                -
                                @else
                                {{ $book->date_returned }}
                                @endif
                            </td>
                            <td class="py-1 px-6">

                                @if($now->between($book->date_borrowed, $book->date_returned))
                                <p class="font-bold"> No </p>
                                @elseif($book->date_borrowed == null && $book->date_returned == null)
                                <p class="font-bold text-red-500"> - </p>
                                @else
                                <p class="font-bold text-red-500"> Yes </p>
                                @endif

                            </td>
                            <td class="py-1 px-6">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <div>
                                    <a href="/dashboard/logbook/{{$book->id}}/assignbook" class="mb-4">
                                        <button class="inline-block items-center bg-pink-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-2 md:mt-0 text-white">
                                            <i class="fa-solid fa-hand-holding-heart"></i>
                                        </button>
                                    </a>

                                    <form method="POST" action="/dashboard/logbook/makeavailable/{{$book->id}}">
                                        @csrf
                                        <button class="inline-block items-center bg-gray-300 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-2 mb-2 text-white">
                                            <i class="fa-solid fa-circle-check"></i>
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
@endsection