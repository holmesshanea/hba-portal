<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    @fluxAppearance
</head>
<body class="bg-white dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
<header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
                <a
                    href="{{ auth()->user()->isAdmin() ? url('/admin') : url('/dashboard') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                >
                    {{ auth()->user()->isAdmin() ? 'Admin' : 'Dashboard' }}
                </a>
                <form
                    method="POST"
                    action="{{ route('logout') }}"
                    style="display: inline;"
                >
                    @csrf
                    <button
                        type="submit"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                        LogOut
                    </button>
                </form>

            @else
                <a
                    href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>
<div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
        @yield('content')
    </main>
</div>
<!-- Footer -->
<footer class=" w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 py-4">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} Homeward Bound Adirondacks. All rights reserved.</p>
        <div class="mt-4">
            <nav class="flex justify-center space-x-4">
                <a href="{{ route('terms') }}" class="text-blue-600 underline">Terms of Service</a>
                <a href="{{ route('privacy') }}" class="text-blue-600 underline">Privacy Policy</a>
                <a href="{{ route('contact') }}" class="text-blue-600 underline">Contact Us</a>
            </nav>
        </div>
    </div>
</footer>
@if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
@endif

@fluxScripts
</body>
</html>
