@extends('admin.layout')
@section('content')

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="cover_image" class="lg:w-1/3 w-full lg:h-4/5 h-64 object-cover object-center rounded lg:mt-8" src="{{$book-> cover_image ? asset('storage/'.$book->cover_image) : asset('/images/divergentcover.jpeg')}}">
            <div class="lg:w-2/3 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $book->author }}</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $book->title  }}</h1>
                <div class="flex mb-8">
                    <!-- Tag Component -->
                    <x-genre-tags :tagsCsv="$book->genre_tags" />
                </div>
                <p class="leading-relaxed">{{ $book->description }}</p>

                <div class="flex mt-8">
                    <span class="title-font font-medium text-2xl text-gray-900">
                        @if( $book->status == 0)
                        Available
                        @elseif($book->user_id == Auth::user()->id)
                        Borrowed
                        @elseif($book->status == 2)
                        Requested
                        @else
                        Unavailable
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection