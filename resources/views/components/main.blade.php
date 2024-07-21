<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/home.css', 'resources/js/home.js'])
    @vite(['resources/css/navbar.css', 'resources/js/navbar.js'])


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap"
        rel="stylesheet">
   



 

    <title>{{ config('app.name') }}</title>
</head>

<body>
    <x-provanav />
    <div class="@if (request()->routeIs('articles.search')) @else  container @endif">
        <div class="@if (request()->routeIs('articles.search')) @else  container @endif">

            {{ $slot }}

        </div>
    </div>
    <x-scrolltotop />
    <x-footer />

</body>

</html>
