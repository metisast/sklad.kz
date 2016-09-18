<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Добро пожаловать</title>
    <!-- Include styles -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/boot.css">
    <link rel="stylesheet" href="/css/tabs_filter.css">
    <link rel="stylesheet" href="/css/carousel.css">
    <link rel="stylesheet" href="/css/modal.css">
    <link rel="stylesheet" href="/css/jquery.formstyler.css">
</head>
<body>
<div class="container">
    <!-- Header start-->
    <div id="header">
        <div class="row">
            <div class="col-xs-12">
                @include('includes.guest.header')
                        <!-- Filter start-->
                @include('includes.guest.filter')
            </div>
        </div>
    </div><!-- Header end -->
    <!-- AD block start -->
    @if(Route::getCurrentRoute()->getPath() == '/'){{-- Include AD only mail page --}}
        @include('includes.main.ad')
    @endif
    {{-- Bread-crumbs --}}
    <div id="bread-crumbs">
        @yield('bread_crumbs')
    </div><!-- Bread-crumbs end -->
    <!-- Content start-->
    <div id="content">
        <div class="row">
            <!-- Left side start-->
            @include('includes.guest.leftSide')
            <!-- Right side start-->
            <div class="col-xs-3">
                @include('includes.guest.rightSide')
            </div>
        </div>
    </div>
    <!-- Pagination start -->
    @include('includes.guest.pagination')
    <!-- Socials -->
    @include('includes.guest.socials')
</div>
<!-- Footer -->
@include('includes.guest.footer')

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Put the modal window content -->
</div>

<!-- Include javascript -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/js/tabs.js"></script>
<script src="/js/filter.js"></script>
<script src="/js/company-features.js"></script>
<script src="/js/regions.js"></script>
<script src="/js/upload-company-photo.js"></script>
<script src="/js/company-publish.js"></script>
<script src="/bower_components/jquery-touchswipe/jquery.touchSwipe.min.js"></script>
<script src="/bower_components/FilmRoll/js/jquery.film_roll.min.js"></script>
<script src="/js/carousel.js"></script>
<script src="/js/jquery.formstyler.min.js"></script>

<script>
    (function($) {
        $(function() {

            $('select').styler();

        });
    })(jQuery);
</script>

</body>
</html>