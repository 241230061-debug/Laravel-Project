<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="min-h-screen flex flex-col bg-gray-100">

    @include('partials.header')

    <main class="flex-grow container mx-auto px-6 py-8">
        <div class="bg-white p-8 rounded shadow-md max-w-2xl mx-auto">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')

</body>
</html>