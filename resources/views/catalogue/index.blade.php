<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">

    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a>
                <a class="mr-5 hover:text-gray-900">Third Link</a>
                <a class="hover:text-gray-900">Fourth Link</a>
            </nav>
            <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-pink-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                <div class="flex w-full mb-20 flex-wrap">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Master Cleanse Reliac Heirloom</h1>
                    <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
                </div>
                <div class="flex flex-wrap md:-m-2 -m-1">
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/501x301">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/502x302">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VIEW OUTPUT -->
        @yield('content')
    </main>

</body>

</html>