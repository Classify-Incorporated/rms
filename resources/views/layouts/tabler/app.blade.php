<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name', 'RMS') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favco.png') }}">

    @vite('resources/sass/app.scss')

    @include('components.tabler.css-tabler')

    <script src="https://kit.fontawesome.com/6369db2b62.js" crossorigin="anonymous"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Custom styles for this Page-->
    @livewireStyles
    @if (isset($ccss))
        {{ $ccss }}
    @endif


</head>

<body class="theme-light" data-new-gr-c-s-check-loaded="14.1089.0">
    <script src="{{ asset('assets/dist/js/demo-theme.min.js') }}"></script>
    <div class="page">
        <div>
            {{-- <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none"> --}}
            <header class="navbar navbar-expand-md navbar-light d-print-none">
                <div class="container-xl">
                    <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button"
                        aria-controls="offcanvasStart">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                        <a href=".">
                            <img src="{{ url('img/system-logo.png') }}" width="110" height="32" alt="Tabler"
                                class="navbar-brand-image">
                        </a>
                    </h1>
                    <div class="navbar-nav flex-row order-md-last">
                        <div class="d-none d-md-flex me-1">
                            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" aria-label="Enable dark mode"
                                data-bs-original-title="Enable dark mode">
                                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                                    </path>
                                </svg>
                            </a>
                            <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" aria-label="Enable light mode"
                                data-bs-original-title="Enable light mode">
                                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path
                                        d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        @auth
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                                    aria-label="Open user menu">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(https://eu.ui-avatars.com/api/?name={{ urlencode($user->name) }})"></span>
                                    <div class="d-none d-md-block ps-2">
                                        <div>{{ strtoupper(strtolower($user->name)) ?? null }}</div>
                                        <div class="mt-1 small text-muted">
                                            {{ ucwords($roles->first()->name) }}
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <a href="#"
                                        class="dropdown-item nav-link d-flex flex-column d-md-none lh-1 text-reset disabled">
                                        <div class="ps-2">
                                            <div>{{ strtoupper(strtolower($user->name)) ?? null }}</div>
                                            <div class="mt-1 small text-muted">
                                                {{ ucwords($roles->first()->name) }}
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider d-flex d-md-none"></div>
                                    <a href="{{ route('profile.show', compact('user')) }}"
                                        class="dropdown-item">{{ __('Profile') }}</a>


                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </header>

            {{-- @include('layouts.mobile-navigation') --}}
            {{-- @include('layouts.navigation') --}}

        </div>
        <div class="page-wrapper">
            <!-- Page Content -->
            {{ $slot }}

            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    &copy; {{ date('Y') }}
                                    <a href="{{ config('app.url') }}"
                                        class="link-secondary">{{ config('app.name') }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://classify.com.ph" target="_blank">Classify Inc.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>



    <!-- Core plugin JavaScript-->
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite('resources/js/app.js')
    @include('components.tabler.js-tabler')
    @include('components.tabler.toastr-tabler')


    <!-- Page level custom scripts -->
    @livewireScripts

    @if (isset($scripts))
        {{ $scripts }}
    @endif

</body>

</html>
