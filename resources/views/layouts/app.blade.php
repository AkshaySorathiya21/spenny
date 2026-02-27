{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Spenny') }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#013b8f",
                        "accent-success": "#61b20b",
                        "background-light": "#f8fafc",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    screens: {
                        'sm': '481px',
                        'md': '769px',
                        'lg': '1025px',
                        'xl': '1281px',
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        body {
            font-family: 'Manrope', sans-serif;
            overflow-x: hidden;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
        }

        .nav-item.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 4px solid #61b20b;
        }

        /* Responsive Sidebar and Main Content */
        .sidebar {
            width: 280px;
            transform: translateX(-100%);
            transition: width 0.3s ease-in-out, transform 0.3s ease-in-out;
            position: fixed;
            height: 100vh;
            z-index: 50;
            overflow-x: hidden;
        }

        .main-content {
            transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
            width: 100%;
        }

        body.sidebar-open .sidebar {
            transform: translateX(0);
        }

        /* Backdrop for mobile/tablet */
        .sidebar-backdrop {
            display: none;
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 40;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            backdrop-filter: blur(2px);
        }

        body.sidebar-open .sidebar-backdrop {
            display: block;
            opacity: 1;
        }

        /* Desktop styles (min-width: 1025px) */
        @media (min-width: 1025px) {
            .sidebar {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 280px;
                width: calc(100% - 280px);
            }

            body.sidebar-closed .sidebar {
                transform: translateX(0);
                width: 88px;
            }

            body.sidebar-closed .main-content {
                margin-left: 88px;
                width: calc(100% - 88px);
            }

            /* Hide specific sidebar elements when closed */
            body.sidebar-closed .sidebar-text,
            body.sidebar-closed .sidebar-user-details {
                opacity: 0;
                display: none;
            }

            body.sidebar-closed .sidebar-logo-full {
                display: none;
            }

            body.sidebar-closed .sidebar-logo-min {
                display: flex !important;
            }

            body.sidebar-closed .nav-item {
                justify-content: center;
                padding-left: 0;
                padding-right: 0;
            }

            body.sidebar-closed .sidebar-user-section {
                padding: 1.5rem 0;
            }

            body.sidebar-closed .sidebar-user-section>div {
                justify-content: center;
            }

            .sidebar-backdrop {
                display: none !important;
            }
        }
    </style>
</head>

<body class="bg-slate-50 antialiased font-display">
    <div id="sidebar-backdrop" class="sidebar-backdrop"></div>
    @include('layouts.sidebar')
    <main class="main-content min-h-screen bg-white flex flex-col">
        @include('layouts.header')
        @yield('content')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleBtns = document.querySelectorAll('.toggle-sidebar');
            const backdrop = document.getElementById('sidebar-backdrop');

            function toggleSidebar() {
                if (window.innerWidth >= 1025) {
                    document.body.classList.toggle('sidebar-closed');
                    localStorage.setItem('sidebar-closed', document.body.classList.contains('sidebar-closed'));
                } else {
                    document.body.classList.toggle('sidebar-open');
                }
            }

            // check initial state for desktop
            if (window.innerWidth >= 1025 && localStorage.getItem('sidebar-closed') === 'true') {
                document.body.classList.add('sidebar-closed');
            }

            toggleBtns.forEach(btn => btn.addEventListener('click', toggleSidebar));
            if (backdrop) {
                backdrop.addEventListener('click', toggleSidebar);
            }

            // Handle cross-breakpoint resizing
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1025) {
                    document.body.classList.remove('sidebar-open');
                } else {
                    // document.body.classList.remove('sidebar-closed');
                }
            });
        });
    </script>
</body>

</html>
