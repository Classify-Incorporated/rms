<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favco.png') }}">
    @include('components.tabler.css-tabler')

    <!-- Fonts -->
    {{-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #FAF7FF;
        }

        .rounded-3 {
            box-shadow: 0px 109px 337px rgba(0, 0, 0, 0.0815322), 0px 45.5376px 140.791px rgba(0, 0, 0, 0.117129), 0px 24.3466px 75.2734px rgba(0, 0, 0, 0.145), 0px 13.6485px 42.1976px rgba(0, 0, 0, 0.172871), 0px 7.24861px 22.4108px rgba(0, 0, 0, 0.208468), 0px 3.01631px 9.32565px rgba(0, 0, 0, 0.29);
            border-radius: 20px;
        }
    </style>
    @vite('resources/sass/app.scss')
</head>

<body class="welcome-body">
    <script src="{{ asset('assets/dist/js/demo-theme.min.js') }}"></script>

    <div class="page page-center">
        <div class="container-xl">
            <div class="mb-4 bg-transparent">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <x-application-logo height="124" />
                </a>
            </div>
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Choose
                    </div>
                    <h2 class="page-title">
                        Document
                    </h2>
                </div>
            </div>

            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                    <a href="{{ route('sd.index') }}" class="card card-link card-link-pop">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span>
                                        @include('components.image.svg.device-electronic-folder')
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Student's
                                    </div>
                                    <div class="font-weight-medium">
                                        Document
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="card card-link card-link-pop">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span>
                                        @include('components.image.svg.folder-lock')
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Ched
                                    </div>
                                    <div class="font-weight-medium">
                                        Submissions
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite('resources/js/app.js')
    @include('components.tabler.js-tabler')
    @include('components.tabler.toastr-tabler')
    @livewireScripts
</body>

</html>
