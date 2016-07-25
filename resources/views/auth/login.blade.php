@extends('layouts.auth')

@section('content')
    <div id="auth">
        <div class="col-xs-12">
            <div class="auth-block">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="auth-img text-center">
                            <h3>Авторизация</h3>
                            <h4>Чтобы войти на сайт введите данные профиля</h4>
                            <img src="/img/login.jpg" alt="register">
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="auth-content">
                            <form action="{{ url('/login') }}" method="post" id="form-auth" class="form-horizontal">
                                {{ csrf_field() }}
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
                                        <input type="password" name="password" class="form-control" placeholder="Пароль" value="{{ old('password') }}">
                                    </div>
                                    @if ($errors->has('password'))
                                        <label class="control-label"><i class="fa fa-close"></i> {{ $errors->first('password') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="checkbox col-xs-6">
                                        <label>
                                            <input type="checkbox" name="remember"> Запомнить меня
                                        </label>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" form="form-auth">
                                    <i class="fa fa-btn fa-sign-in"></i> Войти
                                </button>
                            </div>
                            <div class="come-here">
                                <p>Не можете войти? - <a href="/register">зарегистрироваться</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
