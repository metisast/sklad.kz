@extends('layouts.auth')

@section('content')
    <div id="auth">
        <div class="auth-block">
            <div class="auth-img left text-center">
                <h2>Регистрация</h2>
                <h4>Оставляйте комментарии или станьте поставщиком</h4>
                <img src="/img/register.jpg" alt="register">
            </div>
            <div class="auth-content right">
                <form action="{{ url('/register') }}" method="post" id="form-auth">
                    {{ csrf_field() }}
                    <div class="form-input">
                        <input type="text" name="name" placeholder="Ваше имя" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <div class="form-error">
                                <span>
                                    <strong><i class="fa fa-close"></i> {{ $errors->first('name') }}</strong>
                                </span>
                        </div>
                        @endif
                    </div>
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
                        <input type="password" placeholder="Пароль" name="password">
                        @if ($errors->has('password'))
                            <div class="form-error">
                                <span>
                                    <strong><i class="fa fa-close"></i> {{ $errors->first('password') }}</strong>
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="form-input">
                        <input type="password" placeholder="Повторите пароль" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <div class="form-error">
                                <span>
                                    <strong><i class="fa fa-close"></i> {{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="form-input">
                        <label><input type="checkbox" form="form-auth" name="licence" @if (old('licence')) checked @endif>
                            Я согласен с <a href="#">правилами сайта</a>
                        </label>
                        @if ($errors->has('licence'))
                            <div class="form-error">
                                <span>
                                    <strong><i class="fa fa-close"></i> {{ $errors->first('licence') }}</strong>
                                </span>
                            </div>
                        @endif
                    </div>
                </form>
                <div class="confirm-block">
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
@endsection
