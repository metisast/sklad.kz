{{-- AD create --}}
@extends('layouts.boot')

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
                            <form action="{{route('ad.store')}}" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="col-xs-12">
                                    <div class="form-group @if($errors->has('short_name')) has-error @endif">
                                        <div class="col-xs-4">
                                            {!! Helpers::select($mainCategories, 'name', old('main_category'), 'Тип объявления', ['class' => 'form-control', 'id' => 'main_category', 'name' => 'main_category']) !!}
                                            @if($errors->has('main_category'))
                                                <label class="control-label">{{ $errors->first('main_category') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="col-xs-4 @if($errors->has('industry_id')) has-error @endif">
                                            {!! Helpers::select($industries, 'name', old('industry_id'), 'Отрасль', ['class' => 'form-control', 'id' => 'industry_id', 'name' => 'industry_id']) !!}
                                            @if($errors->has('category_id'))
                                                <label class="control-label">{{ $errors->first('industry_id') }}</label>
                                            @endif
                                        </div>
                                        <div class="col-xs-4 @if($errors->has('category_id')) has-error @endif">
                                            {!! Helpers::select($categories, 'name', old('category_id'), 'Категория', ['class' => 'form-control', 'id' => 'category_id', 'name' => 'category_id']) !!}
                                            @if($errors->has('category_id'))
                                                <label class="control-label">{{ $errors->first('category_id') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="col-xs-4 @if($errors->has('product_id')) has-error @endif">
                                            {!! Helpers::select($products, 'name', old('product_id'), 'Вид', ['class' => 'form-control', 'id' => 'product_id', 'name' => 'product_id']) !!}
                                            @if($errors->has('product_id'))
                                                <label class="control-label">{{ $errors->first('product_id') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-8 @if($errors->has('name')) has-error @endif">
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Наименование">
                                    @if($errors->has('name'))
                                        <label class="control-label">{{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                                <div class="col-xs-12 text-center">
                                    <div class="company-title-info">
                                        <h5>Характеристики</h5>
                                    </div>
                                </div>
                                <!-- AD features start -->
                                <div id="ad_features">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="col-xs-4 @if($errors->has('name')) has-error @endif">
                                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Производительность">
                                                @if($errors->has('name'))
                                                    <label class="control-label">{{ $errors->first('name') }}</label>
                                                @endif
                                            </div>
                                            <p>м. куб.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="col-xs-4 @if($errors->has('name')) has-error @endif">
                                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Мощность">
                                                @if($errors->has('name'))
                                                    <label class="control-label">{{ $errors->first('name') }}</label>
                                                @endif
                                            </div>
                                            <p>кВт</p>
                                        </div>
                                    </div>
                                </div><!-- AD features ens -->
                                <div class="form-space">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="col-xs-4 @if($errors->has('name')) has-error @endif">
                                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Цена">
                                                @if($errors->has('name'))
                                                    <label class="control-label">{{ $errors->first('name') }}</label>
                                                @endif
                                            </div>
                                            <p>Тенге</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-space">
                                    <div class="form-group">
                                        <div class="col-xs-12 @if($errors->has('name')) has-error @endif">
                                            <div class="col-xs-12">
                                                <textarea class="form-control" value="{{ old('name') }}" name="name" placeholder="Опишите свой товар" rows="7"></textarea>
                                                @if($errors->has('name'))
                                                    <label class="control-label">{{ $errors->first('name') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-space">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="col-xs-4 @if($errors->has('industry_id')) has-error @endif">
                                                {!! Helpers::select($industries, 'name', old('industry_id'), 'Регион', ['class' => 'form-control', 'id' => 'industry_id', 'name' => 'industry_id']) !!}
                                                @if($errors->has('category_id'))
                                                    <label class="control-label">{{ $errors->first('industry_id') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-xs-4 @if($errors->has('category_id')) has-error @endif">
                                                {!! Helpers::select($categories, 'name', old('category_id'), 'Город', ['class' => 'form-control', 'id' => 'category_id', 'name' => 'category_id']) !!}
                                                @if($errors->has('category_id'))
                                                    <label class="control-label">{{ $errors->first('category_id') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add photo start -->
                                <div class="col-xs-12">
                                    <div class="form-space">
                                        <div class="company-img">
                                            <!-- F1 -->
                                            <div class="company-img-block">
                                                        <span class="img-thumbnail btn-file">
                                                            <i class="fa fa-plus"></i><input type="file">
                                                            <p class="text-center">Добавить изображение</p>
                                                        </span>
                                            </div>
                                            <!-- F2 -->
                                            <div class="company-img-block">
                                                        <span class="img-thumbnail btn-file">
                                                            <i class="fa fa-plus"></i><input type="file">
                                                            <p class="text-center">Добавить изображение</p>
                                                        </span>
                                            </div>
                                            <!-- F3 -->
                                            <div class="company-img-block">
                                                        <span class="img-thumbnail btn-file">
                                                            <i class="fa fa-plus"></i><input type="file">
                                                            <p class="text-center">Добавить изображение</p>
                                                        </span>
                                            </div>
                                            <!-- F4 -->
                                            <div class="company-img-block">
                                                        <span class="img-thumbnail btn-file">
                                                            <i class="fa fa-plus"></i><input type="file">
                                                            <p class="text-center">Добавить изображение</p>
                                                        </span>
                                            </div>
                                            <!-- F5 -->
                                            <div class="company-img-block">
                                                        <span class="img-thumbnail btn-file">
                                                            <i class="fa fa-plus"></i><input type="file">
                                                            <p class="text-center">Добавить изображение</p>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Add photo end -->
                                <div class="col-xs-12 text-center">
                                    <div class="company-title-info">
                                        <h5>Специальные предложения</h5>
                                    </div>
                                </div>
                                <!-- Spec start -->
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
                                <!-- Licence -->
                                <div class="col-xs-12">
                                    <div class="form-space">
                                        <div class="form-group">
                                            <div class="col-xs-12 checkbox">
                                                <label>
                                                    <input type="checkbox" name="licence">
                                                    Я соглашаюсь с <a href="#">правилами размещения объявлений,</a> а также с передачей и обработкой моих данных
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-success-btn text-center">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary">Опубликовать</button>
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