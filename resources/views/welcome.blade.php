<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-1 font-medium">Let's get started</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Laravel has an incredibly rich ecosystem. We suggest starting with the following.</p>
                    
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#1b1b18] dark:bg-[#EDEDEC]"></span>
                            </span>
                            <a href="https://laravel.com/docs" class="underline underline-offset-4">Documentation</a>
                        </li>
                        
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-0 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#1b1b18] dark:bg-[#EDEDEC]"></span>
                            </span>
                            <a href="https://laracasts.com" class="underline underline-offset-4">Laracasts</a>
                        </li>

                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-0 before:bottom-1/2 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#1b1b18] dark:bg-[#EDEDEC]"></span>
                            </span>
                            <a href="https://laravel-news.com" class="underline underline-offset-4">Laravel News</a>
                        </li>
                    </ul>
                </div>
                <div class="relative -mb-px flex aspect-[335/376] w-full shrink-0 overflow-hidden rounded-t-lg border border-[#19140035] dark:border-[#3E3E3A] lg:-ml-px lg:mb-0 lg:aspect-auto lg:w-[438px] lg:rounded-t-none lg:rounded-r-lg">
                    <img src="https://laravel.com/assets/img/welcome/docs-light.png" class="absolute inset-0 h-full w-full object-cover dark:hidden" />
                    <img src="https://laravel.com/assets/img/welcome/docs-dark.png" class="absolute inset-0 h-full w-full object-cover hidden dark:block" />
                </div>
            </main>
        </div>
    </body>
</html>