<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>User Management System</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    @include('layouts.css.css')

</head>

<body>

    <!--Preloader start-->
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div>
    <!--* Preloader end-->

    <!--*
        Main wrapper start
    **-->
    <div id="main-wrapper">
        <!--*Nav header start**-->
        @include('layouts.main.nawHeader')
        <!--*Nav header end**-->

        <!--*Header start**-->
        @include('layouts.main.header')
        <!--*Header end **-->

        <!--*Sidebar start**-->
        @include('layouts.main.sideBar')
        <!--*Sidebar end **-->

        <!--*Content body start*-->
        @yield('content')
        <!--*Content body end **-->

        <!--* Footer start **-->
        @include('layouts.main.footer')
        <!--*Footer end*-->

    </div>
    <!--*Main wrapper end **-->

</body>

</html>
@include('layouts.js.js')

@yield('script')