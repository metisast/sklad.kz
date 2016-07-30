{{-- Show companies --}}
@extends('layouts.auth')

@section('content')
    <!-- Show company start -->
        <!-- Show company screen start -->
        <div id="company">
            <div id="company-screen">
                <div class="col-xs-12">
                    <div class="company-screen">
                        <div class="col-xs-6 company-screen-name">
                            <h3>BI group</h3>
                            <h4>Здесь строится счастье!</h4>
                        </div>
                        <div class="col-xs-6 text-right company-screen-info">
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
            </div><!-- Show company screen end -->

            <!-- Show company info start -->
            <div class="col-xs-9">
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
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <a href="#">Фото <span class="text-muted">6</span></a>
                                            </div>
                                            <div class="col-xs-12">
                                                <a href="#">Портфолио <span class="text-muted">12</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Company profile info -->
                                <div class="col-xs-8 company-profile-data">
                                    <div class="col-xs-12 company-profile-data-title">
                                        <h4>BI-group</h4>
                                        <p>Товарищество с ограниченной ответственностью</p>
                                        <div class="col-xs-12 company-divider"></div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="company-profile-data-category">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <p class="text-muted">Категории</p>
                                                </div>
                                                <div class="col-xs-9 company-profile-data-category-items">
                                                    <p>Вентиляция</p>
                                                    <p>Отопление</p>
                                                    <p>Насосы</p>
                                                    <p>Электродвигатели</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 company-divider"></div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="company-profile-data-category">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <p class="text-muted">На сайте</p>
                                                </div>
                                                <div class="col-xs-9 company-profile-data-category-items">
                                                    <p>3 года</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- About of company -->
                                <div class="col-xs-12">
                                    <div class="company-about">
                                        <h4>О компании</h4>
                                        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
                                        <div>
                                            <a href="#">Сертификаты  <span class="text-muted">4</span></a>
                                            <a href="#">Рекомендации <span class="text-muted">13</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Company contacts -->
                                <div class="col-xs-12">
                                    <div class="company-contacts">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="company-contacts-header">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <h4>Контакты</h4>
                                                        </div>
                                                        <div class="col-xs-6 block-vis text-right">
                                                            <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                                <i class="fa fa-angle-down"></i> показать
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 collapse" id="collapseExample">
                                                <div class="contacts-table">
                                                    <div class="row">
                                                        <div class="col-xs-10">
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
                                                                        <p>Веб-сайт</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>
                                                                            <i class="fa fa-map-marker"></i> г. Астана, мкр. Коктал-1, ул. Ардагерлер 24 - <span class="text-muted">офис</span>
                                                                            <a href="#">помотреть на карте</a>
                                                                        </p>
                                                                        <p>
                                                                            <i class="fa fa-map-marker"></i> г. Астана, ул. Алаш 22 - <span class="text-muted">склад</span>
                                                                            <a href="#">помотреть на карте</a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="collapse" id="collapseExample">
                                                Lorem ipsum dolor sit amet.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Company catalog -->
                                <div class="col-xs-12">
                                    <div class="company-about">
                                        <h4>Каталог</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Show company info end -->

            <!-- Side bar -->
            <div class="col-xs-3">
                @include('includes.guest.rightSide')
            </div>
        </div>
@endsection