<div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
    <div class="fixed flex flex-col top-0 left-0 w-2/12 bg-white h-full border-r">
        <div class="flex items-center justify-center h-14 border-b">
            <div> <img src="{{ asset('images/logo.png') }}" class="object-cover h-6 w-12 inline-block mr-4" />The Book Nook</div>
        </div>
        <div class="overflow-y-auto overflow-x-hidden flex-grow">
            <ul class="flex flex-col py-4 space-y-1">
                <li class="px-5">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                    </div>
                </li>
                <li>
                    <a href="/dashboard" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/logbook" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Logbook</span>

                    </a>
                </li>
                <li>
                    <a href="/dashboard/books" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-book"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Books</span>

                    </a>
                </li>
                <li class="">
                    <a href="/dashboard/users" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Users</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit">
                                <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                            </button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>