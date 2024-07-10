<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/home.css', 'resources/js/home.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<<<<<<< HEAD
    @vite($entry)
=======
>>>>>>> d67319288e3b6c12dab1207f5a64245446c45dbc
    @vite(['resources/css/navbar.css', 'resources/js/navbar.js'])

    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <x-navbar />
    <div class="container">

        {{ $slot }}

    </div>

    <x-footer />

</body>

</html>
