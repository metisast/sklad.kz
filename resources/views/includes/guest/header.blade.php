<div class="row">
<div class="col-xs-12">
    <div class="col-xs-6">
        <!-- Logo start -->
        <div class="logo">
            <a href="/">
                <h1><span>С</span>клад</h1>
            </a>
        </div><!-- Logo end -->
    </div>

    <div class="col-xs-6">
        <!-- Auth links start-->
        <div class="auth-links text-right">
            <ul class="nav nav-pills navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle dashed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="z-index: 4">
                        <i class="fa fa-map-marker"></i>
                        <span>Ваш регион</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" id="top-region" style="z-index: 3">
                        <div class="col-xs-6">
                            <ul>
                                <li><a href="#">Астана</a></li>
                                <li><a href="#">Караганда</a></li>
                                <li><a href="#">Актобе</a></li>
                                <li><a href="#">Актау</a></li>
                                <li><a href="#">Костанай</a></li>
                                <li><a href="#">Тараз</a></li>
                                <li><a href="#">Кызылорда</a></li>
                                <li><a href="#">Петропавловск</a></li>
                                <li><a href="#">Талдыкорган</a></li>
                                <li><a href="#">Туркестан</a></li>
                                <li><a href="#">Темиртау</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul>
                                <li><a href="#">Алматы</a></li>
                                <li><a href="#">Шымкент</a></li>
                                <li><a href="#">Усть-Каменогорск</a></li>
                                <li><a href="#">Павлодар</a></li>
                                <li><a href="#">Атырау</a></li>
                                <li><a href="#">Уральск</a></li>
                                <li><a href="#">Семей</a></li>
                                <li><a href="#">Кокшетау</a></li>
                                <li><a href="#">Жезказган</a></li>
                                <li><a href="#">Экибастуз</a></li>
                                <li><a href="#">Жанаозен</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Войти</a></li>
                    <li><a href="{{ url('/register') }}">Регистрация</a></li>
                @else
                    <li class="dropdown auth-user">
                        <a href="#" class="dropdown-toggle dashed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="z-index: 4">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>{{ Auth::user()->name }}</span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" style="z-index: 3">
                            <li><a href="#"><i class="fa fa-credit-card"></i> 1500 тг</a></li>
                            <li><a href="{{route('profile::index')}}"><i class="fa fa-gear"></i> Профиль</a></li>
                            <li><a href="/logout"><i class="fa fa-sign-out"></i> Выход</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <div class="col-xs-12 add-advert">
                <div class="row">
                    <a href="{{ route('ad.create') }}" class="btn btn-yellow"><i class="fa fa-plus"></i> Подать объявление</a>
                </div>
            </div>
        </div><!-- Auth links end -->
    </div>
</div>
</div>