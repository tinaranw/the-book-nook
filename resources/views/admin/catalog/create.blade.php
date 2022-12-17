@extends('admin.layout')
@section('content')

<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Add a New Book</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Upload the new book.</p>
        </div>
        <form method="POST" action="/catalog" enctype="multipart/form-data">
            @csrf
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
                            <input type="text" id="title" name="title" placeholder="Book Title" value="{{old('title')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="author" class="leading-7 text-sm text-gray-600">Author</label>
                            <input type="text" id="author" name="author" placeholder="Author Name" value="{{old('author')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('author')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="year_published" class="leading-7 text-sm text-gray-600">Year Published</label>
                            <input type="text" id="year_published" name="year_published" placeholder="Year" value="{{old('year_published')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('year_published')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="genre_tags" class="leading-7 text-sm text-gray-600">Genre Tags</label>
                            <input type="text" id="genre_tags" name="genre_tags" placeholder="Example: Fantasy, Adventure, Romance" value="{{old('genre_tags')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        @error('genre_tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="cover_image" class="leading-7 text-sm text-gray-600">Book Cover Image</label>
                            <input type="file" class="rounded border border-gray-300 p-2 w-full bg-gray-100" name="cover_image" />
                        </div>
                        @error('cover_image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="synopsis" class="leading-7 text-sm text-gray-600">Synopsis</label>
                            <textarea id="synopsis" name="synopsis" placeholder="Short Summary" value="{{old('synopsis')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        @error('synopsis')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
                            <textarea id="description" name="description" placeholder="Brief Description" value="{{old('description')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">Add Book</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection