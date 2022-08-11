<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" id="home">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        .sdown {
            opacity: 0;
            transition-duration: 500ms;
        }

        .sup {
            opacity: 100;
            transition-duration: 500ms;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-[#171923] pb-20">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main class="">>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts


    {{-- Javascripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            //caches a jQuery object containing the header element
            var header = $(".smp");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 350) {
                    header.removeClass('hidden').addClass('block');
                } else {
                    header.removeClass('block').addClass('hidden');
                }
            });
        });
    </script>
    <script>
        $(function() {
            //caches a jQuery object containing the header element
            var header = $(".sd");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 500) {
                    header.removeClass('opacity-0').removeClass('sdown').addClass('sup');
                } else {
                    header.removeClass('sup').addClass('sdown');
                }
            });
        });
    </script>
</body>

</html>