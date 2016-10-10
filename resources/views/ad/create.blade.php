{{-- AD create --}}
@extends('layouts.boot')

@section('bread_crumbs')
    <div class="row">
        <div class="col-xs-9">
            <div class="bread-crumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="/">Главная</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Подать объявление</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
        <!-- Create AD start -->
    <div id="company">
        <div class="row">
            <div class="col-xs-12">
                <!-- AD Header start -->
                <div class="profile-title text-center">
                    <h4>Подать объявление</h4>
                    <p>Несколько простых шагов и ваше объявление увидят все</p>
                </div><!-- AD Header end -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="company-form">
                            <!-- Form company start -->
                            <form method="post" class="form-horizontal" id="ad-publish" data-path="{{ route('ad.store') }}">
                                {{ csrf_field() }}

                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <div class="col-md-12 input-required">
                                            <input type="text" class="form-control" value="{{ old('title') }}" name="title" placeholder="Заголовок">
                                        </div>
                                    </div>
                                </div>

                                <!-- Heading start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="col-xs-3 input-required">
                                            <button class="btn btn-primary btn-sm" id="btn-heading">
                                                <i class="fa fa-folder-open-o"></i> Выберите рубрику
                                            </button>
                                            <input type="hidden" name="industry_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div id="ad-heading-breadcrumb">
                                                <!-- Put here -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Heading end -->

                                <!-- Heading insert block -->
                                <!-- Ad type start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="col-xs-12 input-required">
                                            <div class="btn-group" data-toggle="buttons" id="ad-company-radios">
                                                <label class="btn btn-primary btn-sm active">
                                                    <input type="radio" name="ad_relation" value="1" autocomplete="off" checked>Частное объявление
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="radio" name="ad_relation" value="2" autocomplete="off"> Объявление компании
                                                </label>
                                            </div>
                                            <span>Нет компании, </span><a href="{{ route('company.create') }}">создать</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-4 input-required" id="ad-company-select">
                                            <select name=""><!-- Insert companies --></select>
                                        </div>
                                    </div>
                                </div><!-- Ad type end -->

                                <div class="col-xs-12">
                                    <hr>
                                </div>

                                <!-- Description start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="col-xs-12 input-required">
                                            <textarea class="form-control" value="{{ old('description') }}" name="description" placeholder="Опишите свой товар" rows="7"></textarea>
                                        </div>
                                    </div>
                                </div><!-- Description end -->

                                <!-- Add photo start -->
                                <div class="col-xs-12">
                                    <div class="form-space">
                                        <div class="ad-images">
                                            <!-- F1 -->
                                            <div class="ad-image-block">
                                                <span class="img-thumbnail btn-file main">
                                                    <section class="ad-image-prepare">
                                                        <i class="fa fa-picture-o fa-3x"></i><input type="file" class="ad-image-upload">
                                                    </section>
                                                </span>
                                            </div>
                                            <!-- F2 -->
                                            <div class="ad-image-block">
                                                <span class="img-thumbnail btn-file">
                                                    <section class="ad-image-prepare">
                                                        <i class="fa fa-picture-o fa-3x"></i><input type="file" class="ad-image-upload">

                                                    </section>
                                                </span>
                                            </div>
                                            <!-- F3 -->
                                            <div class="ad-image-block">
                                                <span class="img-thumbnail btn-file">
                                                    <section class="ad-image-prepare">
                                                        <i class="fa fa-picture-o fa-3x"></i><input type="file" class="ad-image-upload">
                                                    </section>
                                                </span>
                                            </div>
                                            <!-- F4 -->
                                            <div class="ad-image-block">
                                                <span class="img-thumbnail btn-file">
                                                    <section class="ad-image-prepare">
                                                        <i class="fa fa-picture-o fa-3x"></i><input type="file" class="ad-image-upload">
                                                    </section>
                                                </span>
                                            </div>
                                            <!-- F5 -->
                                            <div class="ad-image-block">
                                                <span class="img-thumbnail btn-file">
                                                    <section class="ad-image-prepare">
                                                        <i class="fa fa-picture-o fa-3x"></i><input type="file" class="ad-image-upload">
                                                    </section>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Add photo end -->

                                <div class="col-xs-12">
                                    <hr>
                                </div>

                                <!-- Price start -->
                                <div class="form-space">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="col-xs-4 input-required">
                                                <input type="text" class="form-control" value="{{ old('price') }}" name="price" placeholder="Цена">
                                            </div>
                                            <p>Тенге</p>
                                        </div>
                                    </div>
                                </div><!-- Price end -->

                                {{--<div class="col-xs-12 text-center">
                                    <div class="company-title-info">
                                        <h5>Характеристики</h5>
                                    </div>
                                </div>
                                <!-- AD features start -->
                                <div id="ad_features">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Производительность">
                                            </div>
                                            <p>м. куб.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Мощность">
                                            </div>
                                            <p>кВт</p>
                                        </div>
                                    </div>
                                </div><!-- AD features end -->--}}

                                <div class="col-xs-12">
                                    <hr>
                                </div>

                                <div class="col-xs-12 text-center">
                                    <div class="company-title-info">
                                        <h5>Ваши контактные данные</h5>
                                    </div>
                                </div>
                                <!-- Contacts start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="col-xs-4 input-required">
                                            {!! Helpers::select($regions, 'name', old('region_id'), 'Область', ['id' => 'regions', 'name' => 'region_id', 'data-search' => 'true']) !!}
                                        </div>
                                        <div class="col-xs-4 input-required">
                                            <select name="city_id" id="cities" data-search="true"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-4 input-required">
                                            <input type="text" name="user_name" placeholder="Контактное лицо" class="form-control">
                                            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-4 input-required">
                                            <input type="text" name="email" placeholder="Email-адрес" class="form-control">
                                            <span class="fa fa-envelope form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-4 input-required">
                                            <input type="text" name="phone" placeholder="Номер телефона" class="form-control">
                                            <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div><!-- Contacts end -->

                                <div class="col-xs-12">
                                    <hr>
                                </div>

                                {{--<div class="col-xs-12 text-center">
                                    <div class="company-title-info">
                                        <h5>Специальные предложения</h5>
                                    </div>
                                </div>--}}

                                <!-- Spec start -->
                                {{--<div id="spec">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="spec">
                                                <div class="col-xs-2">
                                                    <button class="btn btn-discount active">Скидка <p>15% процентов</p></button>
                                                </div>
                                                <div class="col-xs-3">
                                                    <div class="spec-input">
                                                        <p class="text-muted">Процент скидки</p>
                                                        <input type="text" class="spec-input" value="15">
                                                    </div>
                                                </div>
                                                <div class="col-xs-1">
                                                    <div class="spec-close text-muted">
                                                        <i class="fa fa-close"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="spec">
                                                <div class="col-xs-2">
                                                    <button class="btn btn-sale"><i class="fa fa-plus"></i> Распродажа <p></p></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="spec">
                                                <div class="col-xs-2">
                                                    <button class="btn btn-bonus"><i class="fa fa-plus"></i> Бонус <p></p></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Spec end -->
                                </div>  --}}
                                <!-- Licence -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="checkbox input-required">
                                                <label class="licence">
                                                    <input type="checkbox" name="licence">
                                                    Я соглашаюсь с <a href="#">правилами использования сервисом</a>, а также с передачей и обработкой моих данных. Я подтверждаю  своё совершеннолетие и ответственность за размещение объявления
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-success-btn text-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary" id="btn-ad-publish" data-loading-text="Загрузка..." data-redirect="{{ route('profile::index') }}">Опубликовать</button>
                                            <a href="#">Предпросмотр</a>
                                            <a href="{{ route('profile::index') }}">Отмена</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection