<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>test de live wire </title>

        <!-- Fonts -->

        <!-- Styles -->
       @livewireStyles
    </head>
    <body class="bg-gray-100">
        <main class="px-4 py-8 flex justify-center">
            <div class="w-full md:w-8/12">
                <h1 class="text-5xl my-10 font-extrabold text-center leading-none tracking-tight">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-pink-700">
                        skeleton App demo
                    </span>
                </h1>
                @livewire('card')
                <livewire:blog-post />
            </div>
        </main>
       @livewireScripts
    </body>
</html>
