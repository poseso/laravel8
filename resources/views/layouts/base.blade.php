<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel  @if($title)| {{ $title }} @endif</title>
    <meta name="description" content="@yield('meta_description', 'Laravel')">
    <meta name="author" content="@yield('meta_author', 'Carlos Sánchez')">
    @yield('meta')

    <!--begin::FAVICON-->
    <link rel="shortcut icon" type="ico" href="{{ asset('media/logos/favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('media/logos/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('media/logos/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('media/logos/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/logos/favicon-16x16.png') }}">
    <!--end::FAVICON-->

    <!--begin::APPLE / iOS WEB APPS / iPHONES-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('media/logos/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('media/logos/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('media/logos/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('media/logos/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('media/logos/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('media/logos/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('media/logos/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('media/logos/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/logos/apple-icon-180x180.png') }}">
    <!--end::APPLE / iOS WEB APPS / iPHONES-->

    @stack('before-styles')
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('demo1/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('demo1/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle(used by all pages)-->
    <livewire:styles />
    @stack('after-styles')
</head>
<!--end::Head -->
<body id="kt_body" class="bg-body">
@yield('content')

@stack('before-scripts')
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('demo1/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('demo1/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<livewire:scripts />
@stack('after-scripts')
</body>
</html>
