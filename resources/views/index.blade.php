<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite(['resources/scss/app.scss','resources/js/app.js'])
</head>
<body>
    {{-- NAVIGATION --}}
    @include('layout.nav.drop-nav')
    {{-- SIDEBAR --}}
    @include('layout.sidebar.sibebar')
    {{-- BANNER --}}
    @include('layout.banner')
    {{-- FLASH SECTION --}}
    @include("layout.flash")
    @include('layout.flash-product')
    {{-- Browse by Category --}}
    @include("layout.category")
    {{-- @include("layout.best-sell") --}}
</body>
@stack('scripts')
</html>