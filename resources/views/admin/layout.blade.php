<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="the book nook icon" href="{{ asset('images/favicon.png') }}">
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
    <title>The Book Nook</title>
</head>

<body>

    <main>
        <div class="h-screen flex flex-row flex-wrap">

            @include('partials._sidebar')

            <!-- Content -->
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-200 text-gray-800">
                <div class="fixed flex flex-col top-0 right-0 w-4/5 bg-white h-full border-r">


                    @yield('content')
                </div>
            </div>

        </div>
    </main>



</body>

</html>