<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    <head>
        <meta charset="utf-8" />
        <title>Tuxretas | Administrador de ligas de futbol</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Administrador de ligas de futbol" />
        <meta content="Themesbrand" name="author" />

        <link rel="shortcut icon" href="{{ asset('img/favicon2.ico') }}">
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css"/>
        @livewireStyles
		@stack('custom_styles')
    </head>
    <body>

        <div id="layout-wrapper">
            @include('layouts.header')
            @include('layouts.menu')
            <div class="vertical-overlay"></div>
            <div class="main-content">
                <div class="page-content">
                    {{ $slot }}	
                </div>
            </div>
        </div>

        @livewireScripts
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        @stack('js')

		<script>
			@stack('scripts')			
		</script>
    </body>
</html>