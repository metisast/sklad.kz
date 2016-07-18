{{-- Company create --}}
@extends('layouts.app')

@section('content')
    <!-- Create company start -->
    <div id="company">
        <div class="profile-title">
            <h4 class="text-center">Добавить компанию</h4>
            <p class="text-center">Чтобы зарегистрировать новую компанию, заполните данные о ней</p>
        </div>
        <div class="company-form">
            <!-- Form company start -->
            <form action="{{route('company.store')}}" method="post">
                <div class="form-input">
                    <input type="text" name="short_name" placeholder="Краткое наименование">
                    <span>Оно будет отображаться на сайте!</span>
                </div>
                <div class="form-input left">
                    <select name="opf" id="opf">
                        <option value="0">Организационно правовая форма</option>
                        <option value="1">ИП</option>
                        <option value="2">ТОО</option>
                        <option value="3">АО</option>
                    </select>
                </div>
                <div class="form-input left">
                    <input type="text" name="full_name" placeholder="Полное наименование">
                </div>
                <div class="form-input left">
                    <select name="industry" id="industry">
                        <option value="0">Выберите отрасль</option>
                        <option value="1">ИП</option>
                        <option value="2">ТОО</option>
                        <option value="3">АО</option>
                    </select>
                    <a href="#" class="add-input">
                        <i class="fa fa-plus"></i> Добавить еще категорию
                    </a>
                </div>
                <div class="form-input left">
                    <select name="industry-category" id="industry-category1">
                        <option value="0">Выберите категорию</option>
                        <option value="1">ИП</option>
                        <option value="2">ТОО</option>
                        <option value="3">АО</option>
                    </select>
                </div>
                <div class="clear"></div>
                <div class="company-logo">
                    <div class="company-img left">
                        <div class="company-img-block">
                            <span class="img-thumbnail btn-file">
                                <i class="fa fa-plus"></i><input type="file">
                                <p>Добавить логотип</p>
                            </span>
                        </div>
                    </div>
                    <div class="company-info left">
                        <div class="form-input">
                            <div class="form-input">
                                <input type="text" name="slogan" placeholder="Слоган">
                            </div>
                            <div class="form-input">
                                <input type="text" name="descriptor" placeholder="Дескриптор">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="company-city">
                    <div class="form-input left input-medium">
                        <select name="industry-category" id="city">
                            <option value="0">Выберите город</option>
                            <option value="1">Астана</option>
                            <option value="2">Алматы</option>
                            <option value="3">Караганда</option>
                        </select>
                    </div>
                    <div class="form-input left">
                        <input type="text" name="address" placeholder="Адрес">
                        <div class="input-logo address addr">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <span>
                            <a href="#">Указать на карте</a>
                        </span>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="company-contacts">
                    <div class="form-input left">
                        <input type="text" name="phone1" placeholder="Номер телефона">
                        <a href="#" class="add-input">
                            <i class="fa fa-plus"></i> Добавить еще телефон
                        </a>
                    </div>
                    <div class="form-input left input-medium">
                        <input type="text" name="phone1-description" placeholder="Описание">
                        <div class="input-logo phone">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form-input left">
                        <input type="text" name="email1" placeholder="Е-мэйл">
                        <a href="#" class="add-input">
                            <i class="fa fa-plus"></i> Добавить еще емэйл
                        </a>
                    </div>
                    <div class="form-input left input-medium">
                        <input type="text" name="email1-description" placeholder="Описание">
                        <div class="input-logo email">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form-input left">
                        <input type="text" name="web1" placeholder="Веб-сайт">
                        <a href="#" class="add-input">
                            <i class="fa fa-plus"></i> Добавить еще сайт
                        </a>
                    </div>
                    <div class="form-input left input-medium">
                        <input type="text" name="email1-description" placeholder="Описание">
                        <div class="input-logo web">
                            <i class="fa fa-globe"></i>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form-input left">
                        <input type="text" name="address1" placeholder="Адрес">
                        <a href="#" class="add-input">
                            <i class="fa fa-plus"></i> Добавить еще адрес
                        </a>
                    </div>
                    <div class="form-input left input-medium">
                        <input type="text" name="email1-description" placeholder="Описание">
                        <div class="input-logo address">
                            <i class="fa fa-map-marker"></i>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form-input left">
                        <textarea name="description" id="" cols="100" rows="10" placeholder="Опишите свою компанию
"></textarea>
                    </div>
                </div>
            </form><!-- Form company end -->
        </div>
    </div><!-- Create company end -->
@endsection