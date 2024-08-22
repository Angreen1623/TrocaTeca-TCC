<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('image/t.png') }}">
    <title>TrocaTeca</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-repeat bg-[length:870px_654px] bg-[url('/public/image/bg-icons.png')] bg-auto">
        <div>
            <a href="/">

            </a>
        </div>
        <div class="fixed z-50 inset-0 flex items-center justify-center p-4 sm:p-8">
            <div class="w-full max-w-lg rounded-3xl bg-bluett py-6 sm:py-8 px-16 shadow-2xl items-center drop-shadow-tt border-2 border-graytt-light">
          
                    {{ $slot }}
            
            </div>
        </div>
    </div>
</body>

</html>