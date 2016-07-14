@extends('layouts.auth')

@section('content')
    <div id="auth">
        <div class="auth-block">
            <div class="auth-img left text-center">
                <h2>Авторизация</h2>
                <h4>Чтобы войти на сайт введите данные профиля</h4>
                <img src="/img/login.jpg" alt="register">
            </div>
            <div class="auth-content right">
                <form action="{{ url('/login') }}" method="post" id="form-auth">
                    {{ csrf_field() }}
                    <div class="form-input">
                        <input type="email" name="email" placeholder="Электронная почта" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <div class="form-error">
                                <span>
                                    <strong><i class="fa fa-close"></i> {{ $errors->first('email') }}</strong>
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Пароль" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <div class="form-error">
                                <span>
                                    <strong><i class="fa fa-close"></i> {{ $errors->first('password') }}</strong>
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="form-input">
                        <label>
                            <input type="checkbox" name="remember"> Запомнить меня
                        </label>
                    </div>
                </form>
                <div class="confirm-block">
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
@endsection
