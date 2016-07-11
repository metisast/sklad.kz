<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать</title>
    <!-- Include styles -->
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bower_components/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
</head>
<body>
<div class="wrapper">
    <!-- Header start-->
    <div id="header">
        @include('includes.guest.header')
        <div class="clear"></div>
        <!-- Filter start-->
        @include('includes.guest.filter')
    </div><!-- Header end -->
    <!-- AD block start -->
    @include('includes.main.ad')
    <!-- Bread-crumbs start-->
    @include('includes.guest.bread')
    <!-- Content start-->
    <div id="content">
        <!-- Left side start-->
        @include('includes.guest.leftSide')
        <!-- Right side start-->
        @include('includes.guest.rightSide')
    </div>
    <!-- Pagination start -->
    @include('includes.guest.pagination')
    <!-- Socials -->
    @include('includes.guest.socials')
    <!-- Footer -->
    @include('includes.guest.footer')
</div>

<!-- Include javascript -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/js/tabs.js"></script>
<script src="/js/filter.js"></script>
<script src="/bower_components/jquery-touchswipe/jquery.touchSwipe.min.js"></script>
<script src="/bower_components/FilmRoll/js/jquery.film_roll.min.js"></script>
<script src="/js/carousel.js"></script>
</body>
</html>