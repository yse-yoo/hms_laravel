<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Craft</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endisset

    <!-- Page Content -->
    <main class="container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="bg-white shadow mt-12">
        <div class="container mx-auto px-4 py-6 text-center">
            <p class="text-gray-600">© 2024 ラグジュアリーホテル. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>