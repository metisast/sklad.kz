<!-- Logo start -->
<div class="logo">
    <a href="/">
        <img src="/img/logo.png" alt="Склад"/>
    </a>
</div><!-- Logo end -->
<!-- Auth links start-->
<div class="auth-links right">
    <ul class="auth-links-list">
        <li><i class="fa fa-search"></i></li>
        @if (!Auth::guest())
            <li><a href="#"><i class="fa fa-credit-card"></i> 1500 тг</a></li>
        @endif
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Войти</a></li>
            <li><a href="{{ url('/register') }}">Регистрация</a></li>
        @else
            <li><a href="#" class="bold"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a></li>
        @endif
    </ul>
    <div class="btn-add right">
        <a href="#"><i class="fa fa-plus"></i> Подать объявление</a>
    </div>
</div><!-- Auth links end -->