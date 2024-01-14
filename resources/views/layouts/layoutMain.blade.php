<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @vite('resources/css/app.css')

</head>
<body class="text-gray-700">
    <main>
        {{-- navigation bar --}}
        @include('../components/navMain')

        {{-- content over route --}}
        <div class="p-2 sm:p-5 max-w-7xl mx-auto">
            @yield('content')
        </div>
    </main>
</body>
</html>