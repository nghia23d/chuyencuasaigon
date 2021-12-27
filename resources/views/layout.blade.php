<!DOCTYPE html>
<html class="no-js" lang="vi">

@php
$theme = 'ccsg';
$versionCss = '1.2.2';
@endphp

<head>
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
