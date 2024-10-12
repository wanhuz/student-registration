<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <script src="./js/bootstrap.min.js"></script>

        @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js', 'resources/css/navbar.css'])

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <x-navbar>
                            <x-slot:title>test</x-slot>
                            <x-slot:username>wan</x-slot>
                        </x-navbar>
                    </header>

                    <main class="mt-6">

                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">

                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
