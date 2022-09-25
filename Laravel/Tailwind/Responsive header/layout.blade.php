<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{--Fonts--}}

    {{--Icons--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    {{--Styles--}}
    @vite('resources/css/app.css')

    {{--Scripts--}}

</head>
<body class="m-0 p-0">
<header>
    <nav>
        <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer z-20" onclick="openHeader()">
            {{--Change color of menu icon here--}}
            <i class="bi bi-filter-left p-2 bg-gray-800 rounded-md z-10 fixed right-7 lg:hidden"></i>
        </span>
        {{--Change color here--}}
        <div class="fixed top-0 header bg-gray-800 shadow flex z-10 flex-wrap justify-between items-center h-screen lg:h-20 w-screen hidden lg:block">
            <ul class="flex flex-col lg:flex-row lg:space-x-14 h-40 justify-center items-center w-screen h-auto lg:h-20 text-white text-3xl lg:text-xl">
                <li class="m-2 lg:m-0">
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li class="m-2 lg:m-0">
                    <a href="#" class="">Info</a>
                </li>
                <li class="m-2 lg:m-0">
                    <a href="#">About</a>
                </li>
                <li class="m-2 lg:m-0">
                    <a href="#">Content</a>
                </li>
            </ul>
        </div>

        <script type="text/javascript">

            // If screen == lg, toggle the class "hidden" on the nav
            window.addEventListener('resize', function(event) {
                if (window.innerWidth >= 1024 &&  document.querySelector(".header").classList.contains("hidden")) {
                    document.querySelector(".header").classList.toggle("hidden");
                }
            }, true);

            // Toggle the "hidden" class on the Header
            function openHeader() {
                document.querySelector(".header").classList.toggle("hidden");
            }
        </script>
    </nav>
</header>
<main class="absolute top-0 right-0 bottom-0 left-0 z-0">
    {{ $slot }}
</main>

{{-- <footer></footer>--}}

</body>
</html>
