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
                    <form action="{{route('company.store')}}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="col-xs-12">
                            <div class="form-group @if($errors->has('short_name')) has-error @endif">
                                <div class="col-xs-4">
                                    <input type="text" name="short_name" value="{{ old('short_name') }}" class="form-control" placeholder="Краткое наименование">
                                    @if($errors->has('short_name'))
                                        <label class="control-label">{{ $errors->first('short_name') }}</label>
                                    @endif
                                </div>
                                <div class="col-xs-8">
                                    <p class="text-warning">Оно будет отображаться на сайте!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="col-xs-4 @if($errors->has('opf_id')) has-error @endif">
                                    {!! Helpers::select($opfs, 'short_name', old('opf_id'), 'Организационно правовая форма', ['class' => 'form-control', 'id' => 'opf', 'name' => 'opf_id']) !!}
                                    @if($errors->has('opf_id'))
                                        <label class="control-label">{{ $errors->first('opf_id') }}</label>
                                    @endif
                                </div>
                                <div class="col-xs-4 @if($errors->has('name')) has-error @endif">
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Полное наименование">
                                    @if($errors->has('name'))
                                        <label class="control-label">{{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="industry">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <select name="industry" class="form-control" id="industry">
                                            <option value="0">Выберите отрасль</option>
                                            <option value="1">ИП</option>
                                            <option value="2">ТОО</option>
                                            <option value="3">АО</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <select name="industry-category" class="form-control" id="industry-category1">
                                            <option value="0">Выберите категорию</option>
                                            <option value="1">ИП</option>
                                            <option value="2">ТОО</option>
                                            <option value="3">АО</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12">
                                        <a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще категорию
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="company-logo">
                                <div class="col-xs-2">
                                    <div class="company-img">
                                        <div class="company-img-block">
                                        <span class="img-thumbnail btn-file">
                                            <i class="fa fa-plus"></i><input type="file">
                                            <p>Добавить логотип</p>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="company-info">
                                        <div class="form-group col-xs-12">
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="slogan" placeholder="Слоган">
                                            </div>

                                        </div>
                                        <div class="form-group col-xs-12">
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="descriptor" placeholder="Дескриптор">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="company-city">
                                    <div class="form-group">
                                        <div class="col-xs-4">
                                            <select name="industry-category" class="form-control" id="city">
                                                <option value="0">Выберите город</option>
                                                <option value="1">Астана</option>
                                                <option value="2">Алматы</option>
                                                <option value="3">Караганда</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" name="address" placeholder="Адрес">
                                            <span class="fa fa-map-marker form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-xs-4" style="padding-top: 5px;">
                                            <a href="#">Указать на карте</a>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="company-contacts">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <input type="text" name="phone1" class="form-control" placeholder="Номер телефона">
                                        <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                                        <a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще телефон
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" name="phone1-description" class="form-control" placeholder="Описание">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control" name="email1" placeholder="Е-мэйл">
                                        <span class="fa fa-envelope form-control-feedback" aria-hidden="true"></span>
                                        <a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще емэйл
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="email1-description" placeholder="Описание">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control" name="web1" placeholder="Веб-сайт">
                                        <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                                        <a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще сайт
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="email1-description" placeholder="Описание">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control" name="address1" placeholder="Адрес">
                                        <span class="fa fa-map-marker form-control-feedback" aria-hidden="true"></span>
                                        <a href="#" class="add-link">
                                            <i class="fa fa-plus"></i>Добавить еще адрес
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="email1-description" placeholder="Описание">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <textarea name="description" class="form-control" id="" cols="100" rows="10" placeholder="Опишите свою компанию"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="checkbox">
                                            <label>
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
                                    <button class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </div>
                    </form><!-- Form company end -->
                </div>
            </div>
        </div>
    </div><!-- Create company end -->
@endsection