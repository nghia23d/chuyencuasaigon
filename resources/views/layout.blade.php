<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/themes/ccsg/style/images/favicon.png">
    <title> @yield('title', 'Trang chủ - Chuyện của Sài Gòn') </title>

    <!-- Font, style, css,... -->
    @include('blocks.head')

</head>

<body class="rsolution-scrollbar-xl">
    <div class="content-wrapper">
        @include('blocks.menu')

        <!-- Content -->
        @yield('content')

        @include('blocks.footer')
    </div>

    <!-- Script -->
    @include('blocks.script')
</body>

</html>
