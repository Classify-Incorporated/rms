<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/classify-logo.png') }}">

    @vite('resources/sass/app.scss')

    @include('components.tabler.css-tabler')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/arial-nova" rel="stylesheet">

    <!-- Custom styles for this Page-->
    @livewireStyles
</head>

<body class="d-flex flex-column theme-dark">
    @if (session()->has('message'))
        <a x-data x-init="$dispatch('toastr', { type: '{{ session('type') }}', message: '{{ session('message') }}' })"></a>
    @elseif(session()->has('success'))
        <a x-data x-init="$dispatch('toastr', { type: 'success', message: '{{ session('success') }}' })"></a>
    @endif
    <script src="{{ asset('assets/dist/js/demo-theme.min.js') }}"></script>

    {{ $slot }}

    @livewireScripts
    @vite('resources/js/app.js')
    @include('components.tabler.js-tabler')
    @include('components.tabler.toastr-tabler')
</body>

</html>
