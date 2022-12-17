@extends('user.layout')
@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">

        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">My Books</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">All your borrowed books will be added here!</p>
        </div>

        <!-- Search -->
        @include('partials._search')


        <div class="flex flex-wrap -m-4 items-center justify-center">

            <!-- Show all books -->

            @if($books->count() == 0)

            <div class=" p-12 content-center">
                <div class="overflow-hidden mb-8 text-center flex items-center justify-center">
                    <img alt="login" class="object-fill h-1/2 w-56" src="{{asset('/images/waiting.svg')}}">

                </div>
                <p class="text-center">We're still waiting for you to borrow something..</p>
            </div>


            @else
            <!--  Check if there's any book that a user has borrowed -->
            @foreach($books as $book)
            <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{$book-> cover_image ? asset('storage/'.$book->cover_image) : asset('/images/divergentcover.jpeg')}}" alt="cover_image">
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $book->author }}</h2>
                        <a href="/catalog/{{ $book->id }}">
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-1">{{ $book->title }}</h1>
                        </a>
                        <div class="mb-4">
                            <x-genre-tags :tagsCsv="$book->genre_tags" />
                        </div>

                        <p class="text-xs mb-3">{{ $book->synopsis }}</p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-pink-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @endif


        </div>
    </div>
</section>

@endsection