<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать</title>
    <!-- Include styles -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/boot.css">
    <link rel="stylesheet" href="/css/carousel.css">
</head>
<body>
<div class="container">
    <!-- Header start-->
    <div id="header">
        @include('includes.guest.header')
        <!-- Filter start-->
        @include('includes.guest.filter')
    </div><!-- Header end -->
    <!-- AD block start -->
    @if(Route::getCurrentRoute()->getPath() == '/'){{-- Include AD only mail page --}}
        @include('includes.main.ad')
    @endif
    <!-- Bread-crumbs start-->
    @include('includes.guest.bread')
    <!-- Content start-->
    <div id="content">
        <div class="row">
            <!-- Left side start-->
            @include('includes.guest.leftSide')
            <!-- Right side start-->
            @include('includes.guest.rightSide')
        </div>
    </div>
    <!-- Pagination start -->
    @include('includes.guest.pagination')
    <!-- Socials -->
    @include('includes.guest.socials')
</div>
<!-- Footer -->
@include('includes.guest.footer')

<!-- Include javascript -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/js/tabs.js"></script>
<script src="/js/filter.js"></script>
<script src="/bower_components/jquery-touchswipe/jquery.touchSwipe.min.js"></script>
<script src="/bower_components/FilmRoll/js/jquery.film_roll.min.js"></script>
<script src="/js/carousel.js"></script>
</body>
</html>