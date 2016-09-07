{{-- Show companies --}}
@extends('layouts.boot')

@section('bread_crumbs')
    <div class="row">
        <div class="col-xs-9">
            <div class="bread-crumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="#">{{ $company->opf->short_name.' '.$company->name }}</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Show company start -->
        <!-- Show company screen start -->
        <div id="company">
            <div id="company-screen">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="company-screen">
                            <div class="col-xs-12">
                                <div class="company-screen-img">
                                    <img src="/img/company-bg.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xs-5 company-screen-name">
                                <h3>{{ $company->short_name }}</h3>
                                <h4>Здесь строится счастье!</h4>
                            </div>
                            <div class="col-xs-7 text-right company-screen-info">
                                <div class="col-xs-12">
                                    <h5>Строительство, Вентиляция, Отопление</h5>
                                </div>
                                <div class="col-xs-push-3 col-xs-12 text-center company-screen-info-count">
                                    <div class="col-xs-3">
                                        <h3>15</h3>
                                        <h4>Товаров</h4>
                                    </div>
                                    <div class="col-xs-3">
                                        <h3>10</h3>
                                        <h4>Материалов</h4>
                                    </div>
                                    <div class="col-xs-3">
                                        <h3>3</h3>
                                        <h4>Услуги</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Show company screen end -->

            <!-- Show company info start -->
            <div class="col-xs-12">
                <div id="company-info">
                    <div class="row">
                        <div class="company-info">
                            <div class="col-xs-12">
                                <!-- Company logo block -->
                                <div class="col-xs-2">
                                    <div class="company-profile-logo">
                                        <a href="#">
                                            <i class="fa fa-picture-o fa-4x"></i>
                                            <p>Добавить логотип компании</p>
                                        </a>
                                    </div>
                                    <div class="company-profile-port">
                                        <a href="#">Фото <span>6</span></a>
                                    </div>
                                </div>
                                <!-- Company profile info -->
                                <div class="col-xs-10 company-profile-data">
                                    <div class="row">
                                        <div class="col-xs-12 company-profile-data-title">
                                            <h4>{{ $company->short_name }}</h4>
                                            <p>{{ $company->opf->name }}</p>
                                            <p><i class="fa fa-map-marker"></i> Астана</p>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="company-profile-data-category">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <ul class="list-inline">
                                                            <li><p class="text-muted">Деятельность: </p></li>
                                                            <li><p>Вентиляция </p></li>
                                                            <li><p>Отопление </p></li>
                                                            <li><p>Насосы </p></li>
                                                            <li><p>Электродвигатели </p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- About of company -->
                                <div class="col-xs-12">
                                    <div class="company-about">
                                        <h4 class="text-center">О компании</h4>
                                        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
                                        <ul class="list-inline company-about-links">
                                            <li>
                                                <a href="#">
                                                    <div class="about-view">
                                                        <i class="fa fa-wpforms"></i> Сертификаты
                                                    </div>
                                                    <div class="about-hidden">
                                                        10 сертификатов
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-trademark"></i> Лицензий</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-comments"></i> Рекомендации</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-trophy"></i> Награды</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-book"></i> Портфолио</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Company contacts -->
                                <div class="col-xs-12">
                                    <div class="company-contacts">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="company-contacts-header">
                                                    <div class="row">
                                                        <div class="col-xs-10">
                                                            <h4 class="text-center" style="margin-left: 140px;">Контакты</h4>
                                                        </div>
                                                        <div class="col-xs-2 block-vis text-right">
                                                            <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                                <i class="fa fa-angle-down" style="padding-right: 5px"></i>показать
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 collapse" id="collapseExample">
                                                <div class="contacts-table">
                                                    <div class="row">
                                                        <div class="col-xs-11">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <p>Телефон</p>
                                                                    </td>
                                                                    <td>
                                                                        <p><i class="fa fa-phone"></i> 8-7172-11-22-33 - <span class="text-muted">городской</span></p>
                                                                        <p><i class="fa fa-phone"></i> 8-7172-11-22-33 - <span class="text-muted">бухгалтерия</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>Электронная почта</p>
                                                                    </td>
                                                                    <td>
                                                                        <p><i class="fa fa-envelope"></i> snabastana@yandex.kz</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>Веб-сайт</p>
                                                                    </td>
                                                                    <td>
                                                                        <p><i class="fa fa-globe"></i> www.snabastana.kz</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>Адрес</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>
                                                                            <i class="fa fa-map-marker"></i> г. Астана, мкр. Коктал-1, ул. Ардагерлер 24 - <span class="text-muted">офис</span>
                                                                            <a href="#"><i class="fa fa-map"></i> <span>помотреть на карте</span></a>
                                                                        </p>
                                                                        <p>
                                                                            <i class="fa fa-map-marker"></i> г. Астана, ул. Алаш 22 - <span class="text-muted">склад</span>
                                                                            <a href="#"><i class="fa fa-map"></i> <span>помотреть на карте</span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Company catalog -->
                                <div class="col-xs-12">
                                    <div class="company-contacts">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="company-contacts-header">
                                                    <div class="row">
                                                        <div class="col-xs-10">
                                                            <h4 class="text-center" style="margin-left: 140px;">Каталог</h4>
                                                        </div>
                                                        <div class="col-xs-2 block-vis text-right">
                                                            <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                                                <i class="fa fa-angle-down" style="padding-right: 5px"></i>показать
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-list-sort text-right">
                                                <div class="col-xs-12">
                                                    <a href="#"><i class="fa fa-th-list" style="padding-right: 5px"></i>Список</a>
                                                    <a href="#"><i class="fa fa-table" style="padding-right: 5px"></i>Таблица</a>
                                                </div>
                                            </div>
                                            <!-- Company profile catalogs -->
                                            <div class="col-xs-12 collapse" id="collapseExample1">
                                                <!--  Table view -->
                                                <div class="company-catalog">
                                                    <div class="row">
                                                        <!-- T1 -->
                                                        <div class="col-xs-3">
                                                            <div class="company-catalog-table-item text-center">
                                                                <div class="company-catalog-table-item-logo">
                                                                    <i class="fa fa-yelp fa-3x text-muted"></i>
                                                                </div>
                                                                <div class="company-catalog-table-item-title">
                                                                    <a href="#">Вентиляция</a>
                                                                </div>
                                                                <table class="text-left text-muted">
                                                                    <tr>
                                                                        <td>Товаров</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Материалов</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Услуг</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- T2 -->
                                                        <div class="col-xs-3">
                                                            <div class="company-catalog-table-item text-center">
                                                                <div class="company-catalog-table-item-logo">
                                                                    <i class="fa fa-industry fa-3x text-muted"></i>
                                                                </div>
                                                                <div class="company-catalog-table-item-title">
                                                                    <a href="#">Строительство инженерных сооружений</a>
                                                                </div>
                                                                <table class="text-left text-muted">
                                                                    <tr>
                                                                        <td>Товаров</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Материалов</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Услуг</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- T3 -->
                                                        <div class="col-xs-3">
                                                            <div class="company-catalog-table-item text-center">
                                                                <div class="company-catalog-table-item-logo">
                                                                    <i class="fa fa-fire-extinguisher fa-3x text-muted"></i>
                                                                </div>
                                                                <div class="company-catalog-table-item-title">
                                                                    <a href="#">Противопожарное оборудование</a>
                                                                </div>
                                                                <table class="text-left text-muted">
                                                                    <tr>
                                                                        <td>Товаров</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Материалов</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Услуг</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- T4 -->
                                                        <div class="col-xs-3">
                                                            <div class="company-catalog-table-item text-center">
                                                                <div class="company-catalog-table-item-logo">
                                                                    <i class="fa fa-gavel fa-3x text-muted"></i>
                                                                </div>
                                                                <div class="company-catalog-table-item-title">
                                                                    <a href="#">Юриспруденция</a>
                                                                </div>
                                                                <table class="text-left text-muted">
                                                                    <tr>
                                                                        <td>Товаров</td>
                                                                        <td>5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Материалов</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Услуг</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  List view -->
                                                <div class="company-catalog">
                                                    <div class="row">
                                                        <!-- L1 -->
                                                        <div class="col-xs-12">
                                                            <div class="company-catalog-list-item">
                                                                <div class="col-xs-2">
                                                                    <div class="company-catalog-list-item-logo text-center">
                                                                        <i class="fa fa-black-tie fa-3x text-muted"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-10">
                                                                    <div class="company-catalog-list-item-title">
                                                                        <a href="#">Делопроизводство</a>
                                                                    </div>
                                                                    <ul class="list-inline text-muted">
                                                                        <li><p>Товаров 5</p></li>
                                                                        <li><p>Материалов 17</p></li>
                                                                        <li><p>Услуг 2</p></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- L2 -->
                                                        <div class="col-xs-12">
                                                            <div class="company-catalog-list-item">
                                                                <div class="col-xs-2">
                                                                    <div class="company-catalog-list-item-logo text-center">
                                                                        <i class="fa fa-building fa-3x text-muted"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-10">
                                                                    <div class="company-catalog-list-item-title">
                                                                        <a href="#">Строительство</a>
                                                                    </div>
                                                                    <ul class="list-inline text-muted">
                                                                        <li><p>Товаров 5</p></li>
                                                                        <li><p>Материалов 17</p></li>
                                                                        <li><p>Услуг 2</p></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- L3 -->
                                                        <div class="col-xs-12">
                                                            <div class="company-catalog-list-item">
                                                                <div class="col-xs-2">
                                                                    <div class="company-catalog-list-item-logo text-center">
                                                                        <i class="fa fa-tint fa-3x text-muted"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-10">
                                                                    <div class="company-catalog-list-item-title">
                                                                        <a href="#">Нефтепроизводство</a>
                                                                    </div>
                                                                    <ul class="list-inline text-muted">
                                                                        <li><p>Товаров 5</p></li>
                                                                        <li><p>Материалов 17</p></li>
                                                                        <li><p>Услуг 2</p></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Show company info end -->
        </div>
@endsection