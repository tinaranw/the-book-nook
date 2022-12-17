@extends('user.layout')
@section('content')
<form method="POST" action="/userlogin">
    @csrf
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 pt-12 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 sm:mr-10">
                <h1 class="text-gray-900 text-lg mb-1 font-medium title-font">Login</h1>
                <p class="leading-relaxed mb-5 text-gray-600">Welcome to The Book Nook Library.</p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <button class="text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg">Login</button>
                <p class="text-xs text-gray-500 mt-3 text-center">Don't have an account? <a href="/register"><span class="text-pink-500">Register here.</span></p></a>
            </div>
            <div class="lg:w-2/3 md:w-1/2 overflow-hidden flex items-center justify-center relative">
                <img alt="login" class="object-fill h-auto w-100" src="{{asset('/images/login.svg')}}">
            </div>

        </div>
    </section>
</form>
@endsection