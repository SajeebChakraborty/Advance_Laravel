<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    @vite('resources/css/app.css')
</head>
<body>
    <div class="main_wrapper flex flex-col">
        <div>
            @include('Components.navbar')
        </div>
        {{-- create a container div with tailwind --}}
        <div class="container mx-auto px-4">
            @yield('body')
        </div>
    </div>
</body>
</html>