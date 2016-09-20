{{-- Company create --}}
@extends('layouts.boot')

@section('content')
    <!-- Create company start -->
    <div id="company">
        <div class="row">
            <div class="col-xs-12">
                <div class="profile-title text-center">
                    <h4>Добавить компанию</h4>
                    <p>Чтобы зарегистрировать новую компанию, заполните данные о ней</p>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="company-form">
                    <!-- Form company start -->
                    <form action="{{route('company.store')}}" method="post" class="form-horizontal" id="company-publish" data-path="{{ route('company.store') }}">
                        {{ csrf_field() }}
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="col-xs-8 input-required">
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Наименование компании">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="col-xs-4 input-required">
                                    {!! Helpers::select($opfs, 'short_name', old('opf_id'), 'Организационно правовая форма', ['id' => 'opf', 'name' => 'opf_id']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="col-xs-4 input-required">
                                    <a href="#" id="features" data-toggle="modal" data-target="#modal">
                                        Выберите деятельность компании
                                    </a>
                                    <input type="hidden" name="features">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div id="industries-catalog">
                                        <!-- Put the company industries -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="company-logo">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="company-img">
                                            <div class="company-img-block">
                                                <span class="img-thumbnail btn-file">
                                                    <section class="company-photo-prepare">
                                                        <i class="fa fa-plus"></i><input type="file" class="company-photo-upload">
                                                        <p>Добавить логотип</p>
                                                    </section>
                                                    <section class="company-photo-ready">
                                                        <img src="" alt="">
                                                        <div class="company-photo-close"><i class="fa fa-close"></i></div>
                                                        <input type="hidden" name="company_logo">
                                                    </section>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="company-info">
                                            <div class="form-group col-xs-12">
                                                <div class="col-xs-8">
                                                    <input type="text" class="form-control" name="slogan" placeholder="Слоган">
                                                </div>
                                            </div>
                                            {{--<div class="form-group col-xs-12">
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" name="descriptor" placeholder="Дескриптор">
                                                </div>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="company-city">
                                <div class="form-group">
                                    <div class="col-xs-4 input-required">
                                        {!! Helpers::select($regions, 'name', 0, 'Выберите область', ['name' => 'regions', 'id' => 'regions', 'data-search' => 'true']) !!}
                                    </div>
                                    <div class="col-xs-4 input-required">
                                        <select name="cities" id="cities" data-search="true"></select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="company-contacts">
                                <div class="form-group">
                                    <div class="col-xs-4 input-required">
                                        <input type="text" name="phone"  value="{{ old('phone') }}" class="form-control" placeholder="Номер телефона">
                                        <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" name="phone_description" class="form-control" placeholder="Описание">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-4 input-required">
                                        <input type="text" class="form-control" name="email" placeholder="Е-мэйл">
                                        <span class="fa fa-envelope form-control-feedback" aria-hidden="true"></span>
                                        {{--<a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще емэйл
                                        </a>--}}
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="email_description" placeholder="Описание">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-4 input-required">
                                        <input type="text" class="form-control" name="web_site" placeholder="Веб-сайт">
                                        <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                                        {{--<a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще сайт
                                        </a>--}}
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="web_site_description" placeholder="Описание">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-4 input-required">
                                        <input type="text" class="form-control" name="address" placeholder="Адрес">
                                        <span class="fa fa-map-marker form-control-feedback" aria-hidden="true"></span>
                                        {{--<a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще адрес
                                        </a>--}}
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="address_description" placeholder="Описание">
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="col-xs-12 input-required">
                                        <textarea name="description" class="form-control" id="" cols="100" rows="10" placeholder="Опишите свою компанию"></textarea>
                                    </div>
                                </div>
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
                        </div>
                        <div class="company-success-btn text-center">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary" data-loading-text="Загрузка..." autocomplete="off">Добавить</button>
                                    <a href="{{ route('profile::index') }}">Отмена</a>
                                </div>
                            </div>
                        </div>
                    </form><!-- Form company end -->
                </div>
            </div>
        </div>
    </div><!-- Create company end -->
@endsection