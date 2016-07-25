<div class="col-xs-6">
    <!-- Logo start -->
    <div class="logo">
        <a href="/">
            <img src="/img/logo.png" alt="Склад"/>
        </a>
    </div><!-- Logo end -->
</div>

<div class="col-xs-6">
    <!-- Auth links start-->
    <div class="auth-links text-right">
        <ul class="nav nav-pills navbar-right">
            @if (!Auth::guest())
                <li><a href="#"><i class="fa fa-map-marker"></i> Ваш регион</a></li>
            @endif
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Войти</a></li>
                <li><a href="{{ url('/register') }}">Регистрация</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-credit-card"></i> 1500 тг</a></li>
                        <li><a href="{{route('profile::index')}}"><i class="fa fa-gear"></i> Профиль</a></li>
                        <li><a href="/logout"><i class="fa fa-sign-out"></i> Выход</a></li>
                    </ul>
                </li>
            @endif
        </ul>
        <div class="col-xs-12 add-advert">
            <div class="row">
                <a href="#" class="btn btn-yellow"><i class="fa fa-plus"></i> Подать объявление</a>
            </div>
        </div>
    </div><!-- Auth links end -->
</div>