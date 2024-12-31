<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp 3Edge</title>
    <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/congrets.css') }}">
    <script src="{{ asset('front/assets/js/congrets.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
    @stack('styles')
</head>
<body>

    <!-- congrats -->
    <div class="congrats-overlay" id="congratsOverlay">
        <div class="confetti-container js-container"></div>
    </div>

    <x-header></x-header>
    @yield('content')
    <x-footer></x-footer>
    @stack('scripts')
</body>
</html>
