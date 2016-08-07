{{-- Filter --}}
<div id="filter">
    <div class="col-xs-12">
        <div class="row">
            <!-- Tabs start-->
            <div class="col-xs-12">
                <ul class="tabs__caption nav-pills" data-show="false">
                    @foreach($main_categories as $main)
                        <li class="tabs-{{ $main->styles }}">{{ $main->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-9">
                <div class="filter-left">
                    <div class="tabs">
                        <div class="tabs__content  active">
                            <div class="filter-layer">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="filter-layer-title">
                                            Отрасль:
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <div class="filter-layer-list">
                                            <div class="filter-layer-item more-down active-down">
                                                <a href="#" data-status="true">Выбрать отрасль</a> <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-sub filter-open" id="filter-industry">
                                    @foreach($test as $t)
                                        <div class="col-xs-4">
                                            <a href="#" class="filter-sub-link" data-type="industry" data-id="{{ $t->id }}">{{ $t->name }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="filter-layer">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="filter-layer-title">
                                            Категория:
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <div class="filter-layer-list">
                                            <div class="filter-layer-item more-down active-down">
                                                <a href="#" class="text-muted" data-status="true" data-hidden="Выбрать категорию">Выбрать категорию</a> <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-layer">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="filter-layer-title left">
                                            Тип товара:
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <div class="filter-layer-list left">
                                            <div class="filter-layer-item more-down active-down">
                                                <a href="#" class="text-muted" data-status="true" data-hidden="Выбрать тип товара">Выбрать тип товара</a> <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-layer">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="filter-layer-list left">
                                            <div class="filter-layer-item more-down">
                                                <a href="#" class="text-muted" data-status="true">Расширенный поиск  <i class="fa fa-angle-down"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-sub">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <form class="" id="advance-search">
                                                <div class="row">
                                                    <div class="col-xs-12 form-group">
                                                        <div class="col-xs-3">
                                                            <label class="control-label">Производительность:</label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="pressure">
                                                                <div class="input-group-addon">м/куб.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 form-group">
                                                        <div class="col-xs-3">
                                                            <label class="control-label">Давление:</label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="pressure">
                                                                <div class="input-group-addon">Па</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 form-group">
                                                        <div class="col-xs-3">
                                                            <label class="control-label">Мощность:</label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="pressure">
                                                                <div class="input-group-addon">W</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 form-group">
                                                        <div class="col-xs-3">
                                                            <label class="control-label">Обороты:</label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="pressure">
                                                                <div class="input-group-addon">об/мин</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-xs-3 control-label">Поиск по тексту:</label>
                                                    <div class="col-xs-6">
                                                        <input type="text" class="form-control" name="pressure">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-layer">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <button class="btn btn-success">Найти</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs__content">
                        <div class="filter-layer">
                            <div class="filter-layer-title left">
                                Отрасль
                            </div>
                            <div class="filter-layer-list left">
                                <div class="filter-layer-item active"><a href="#">Строительство</a></div>
                                <div class="filter-layer-item"><a href="#">Машиностроение</a></div>
                                <div class="filter-layer-item"><a href="#">Нефтепроизводство</a></div>
                                <div class="filter-layer-item more-down active-down"><a href="#" >Еще <i class="fa fa-angle-down"></i></a></div>
                            </div>
                            <div class="filter-sub">
                                <ul class="triple">
                                    <li><a href="#">Агропромышленность</a></li>
                                    <li><a href="#">Агропромышленность</a></li>
                                    <li><a href="#">Агропромышленность</a></li>
                                    <li><a href="#">Агропромышленность</a></li>
                                    <li><a href="#">Бытовое обслуживание</a></li>
                                    <li><a href="#">Бытовое обслуживание</a></li>
                                    <li><a href="#">Бытовое обслуживание</a></li>
                                    <li><a href="#">Бытовое обслуживание</a></li>
                                    <li><a href="#">Культура</a></li>
                                    <li><a href="#">Культура</a></li>
                                    <li><a href="#">Культура</a></li>
                                    <li><a href="#">Культура</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tabs__content">
                        3
                    </div>

                    <div class="tabs__content">

                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="filter-right">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="z-index: 2">
                                        <i class="fa fa-map-marker"></i> Выберите город <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" id="top-region-cities" style="z-index: 1">
                                        <div class="col-xs-12">
                                            <ul>
                                                <li><a href="#">Астана</a></li>
                                                <li><a href="#">Акколь</a></li>
                                                <li><a href="#">Атбасар</a></li>
                                                <li><a href="#">Державинск</a></li>
                                                <li><a href="#">Ерейментау</a></li>
                                                <li><a href="#">Есиль</a></li>
                                                <li><a href="#">Кокшетау</a></li>
                                                <li><a href="#">Макинск</a></li>
                                                <li><a href="#">Щучинск</a></li>
                                                <li><a href="#">Степногорск</a></li>
                                                <li><a href="#">Степняк</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="checkbox col-xs-12">
                        <label>
                            <input type="checkbox" name="unmarketable"/>Неликвид
                        </label>
                    </div>
                    <div class="checkbox col-xs-12">
                        <label>
                            <input type="checkbox" name="made-in-kz"/>Сделано в Казахстане
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- Tabs end -->
