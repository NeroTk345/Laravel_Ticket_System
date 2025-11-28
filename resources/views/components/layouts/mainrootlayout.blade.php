<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">

    {{-- Header --}}
    @include('components.ui.header')

    {{-- Main content --}}
    <main class="min-h-screen">
        {{$slot}}
    </main>

    {{-- Footer --}}
    @include('components.ui.footer')

    @vite('resources/js/app.js')
</body>
</html>
