@extends('layouts.auth')

@section('content')
    <div id="auth">
        <div class="col-xs-12">
            <div class="auth-block">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="auth-img text-center">
                            <h3>Регистрация</h3>
                            <h4>Оставляйте комментарии или станьте поставщиком</h4>
                            <img src="/img/register.jpg" alt="register">
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="auth-content">
                            <form action="{{ url('/register') }}" method="post" id="form-auth" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group @if($errors->has('name')) has-error @endif">
                                    <div class="col-xs-6">
                                        <input type="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Ваше имя">
                                    </div>
                                    @if($errors->has('name'))
                                        <label class="control-label"><i class="fa fa-close"></i> {{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('email')) has-error @endif">
                                    <div class="col-xs-6">
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Электронная почта">
                                    </div>
                                    @if($errors->has('email'))
                                        <label class="control-label"><i class="fa fa-close"></i> {{ $errors->first('email') }}</label>
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('password')) has-error @endif">
                                    <div class="col-xs-6">
                                        <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Пароль">
                                    </div>
                                    @if($errors->has('password'))
                                        <label class="control-label"><i class="fa fa-close"></i> {{ $errors->first('password') }}</label>
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
                                    <div class="col-xs-6">
                                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password') }}" placeholder="Повторите пароль">
                                    </div>
                                    @if($errors->has('password_confirmation'))
                                        <label class="control-label"><i class="fa fa-close"></i> {{ $errors->first('password_confirmation') }}</label>
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('licence')) has-error @endif">
                                    <div class="checkbox col-xs-6">
                                        <label><input type="checkbox" form="form-auth" name="licence" @if (old('licence')) checked @endif>
                                            Я согласен с <a href="#">правилами сайта</a>
                                        </label>
                                    </div>
                                    @if($errors->has('licence'))
                                        <label class="control-label"><i class="fa fa-close"></i> {{ $errors->first('licence') }}</label>
                                    @endif
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" form="form-auth">
                                    <i class="fa fa-btn fa-user"></i> Зарегистрироваться
                                </button>
                            </div>
                            <div class="come-here">
                                <p>Уже зарегистрированы? - <a href="/login">вам сюда</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
