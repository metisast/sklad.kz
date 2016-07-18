{{-- User profile --}}
@extends('layouts.app')

@section('content')
    <!-- User profile start -->
    <div id="profile">
        <div class="profile-title">
            <h4 class="text-center">Добро пожаловать в профиль!</h4>
        </div>
        <div class="profile-content">
            <div class="profile-img left">
                <a href="#">
                    <img src="/img/user.png" alt="user">
                </a>
            </div>
            <div class="profile-info left">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <p>Пользователь</p>
                            </td>
                            <td>
                                <p>Евгений ID <a href="#">46128</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>На сайте</p>
                            </td>
                            <td>
                                <p>с 03.06.2016 года</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Телефон</p>
                            </td>
                            <td>
                                <p><i class="fa fa-phone"></i> +7 747 11-22-33</p>
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
                    </tbody>
                </table>
                <div class="profile-cash">
                    <div class="profile-cash-block">
                        <h4>на счету: 5 000 тенге</h4>
                        <a href="#"><i class="fa fa-credit-card"></i> Пополнить кошелек</a>
                    </div>
                </div>
            </div>
            <div class="profile-edit left">
                <a href="#"><i class="fa fa-gear"></i> редактировать мои данные</a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="profile-company">
            <div class="profile-company-title">
                <h4>Мои компании</h4>
                <a href="{{route('company.create')}}"><i class="fa fa-plus"></i> Добавить компанию</a>
            </div>
            <div class="profile-list-sort">
                <a href="#"><i class="fa fa-th-list"></i> Список</a>
                <a href="#"><i class="fa fa-table"></i> Таблица</a>
            </div>
        </div>
        <!-- View list company start -->
        <div class="profile-company-block">
            <!-- list 1 -->
            <div class="profile-company-list-item">
                <div class="profile-company-list-img">
                    <a href="#">
                        <img src="/img/bi.jpg" alt="bi">
                    </a>
                </div>
                <div class="profile-company-list-name">
                    <h5><strong><a href="#">BI-group</a></strong></h5>
                </div>
                <div class="profile-company-list-city">
                    <h5><i class="fa fa-map-marker"></i> Астана</h5>
                </div>
                <div class="profile-company-list-status">
                    <table>
                        <tbody>
                        <tr>
                            <td><p>Товаров</p></td>
                            <td><p>215</p></td>
                        </tr>
                        <tr>
                            <td><p>Материалов</p></td>
                            <td><p>80</p></td>
                        </tr>
                        <tr>
                            <td><p>Услуг</p></td>
                            <td><p>15</p></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="profile-company-list-status-title">
                        <p>Статус: Продавец</p>
                    </div>
                </div>
            </div>
            <!-- list 2 -->
            <div class="profile-company-list-item">
                <div class="profile-company-list-img">
                    <a href="#">
                        <img src="/img/bi.jpg" alt="bi">
                    </a>
                </div>
                <div class="profile-company-list-name">
                    <h5><strong><a href="#">Lorem ipsum dolor sit amet.</a></strong></h5>
                </div>
                <div class="profile-company-list-city">
                    <h5><i class="fa fa-map-marker"></i> Астана</h5>
                </div>
                <div class="profile-company-list-status">
                    <table>
                        <tbody>
                        <tr>
                            <td><p>Товаров</p></td>
                            <td><p>215</p></td>
                        </tr>
                        <tr>
                            <td><p>Материалов</p></td>
                            <td><p>80</p></td>
                        </tr>
                        <tr>
                            <td><p>Услуг</p></td>
                            <td><p>15</p></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="profile-company-list-status-title">
                        <p>Статус: Продавец</p>
                    </div>
                </div>
            </div>
            <!-- list 3 -->
            <div class="profile-company-list-item">
                <div class="profile-company-list-img">
                    <a href="#">
                        <img src="/img/bi.jpg" alt="bi">
                    </a>
                </div>
                <div class="profile-company-list-name">
                    <h5><strong><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></strong></h5>
                </div>
                <div class="profile-company-list-city">
                    <h5><i class="fa fa-map-marker"></i> Астана</h5>
                </div>
                <div class="profile-company-list-status">
                    <table>
                        <tbody>
                        <tr>
                            <td><p>Товаров</p></td>
                            <td><p>215</p></td>
                        </tr>
                        <tr>
                            <td><p>Материалов</p></td>
                            <td><p>80</p></td>
                        </tr>
                        <tr>
                            <td><p>Услуг</p></td>
                            <td><p>15</p></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="profile-company-list-status-title">
                        <p>Статус: Продавец</p>
                    </div>
                </div>
            </div>
            <!-- list 4 -->
            <div class="profile-company-list-item">
                <div class="profile-company-list-img">
                    <a href="#">
                        <img src="/img/bi.jpg" alt="bi">
                    </a>
                </div>
                <div class="profile-company-list-name">
                    <h5><strong><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></strong></h5>
                </div>
                <div class="profile-company-list-city">
                    <h5><i class="fa fa-map-marker"></i> Астана</h5>
                </div>
                <div class="profile-company-list-status">
                    <table>
                        <tbody>
                        <tr>
                            <td><p>Товаров</p></td>
                            <td><p>215</p></td>
                        </tr>
                        <tr>
                            <td><p>Материалов</p></td>
                            <td><p>80</p></td>
                        </tr>
                        <tr>
                            <td><p>Услуг</p></td>
                            <td><p>15</p></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="profile-company-list-status-title">
                        <p>Статус: Продавец</p>
                    </div>
                </div>
            </div>
        </div><!-- View list company end -->
        <!-- View table company start -->
        <div class="clear"></div>
        <div class="profile-company-block">
            <!-- table 1 -->
            <div class="profile-company-table-item">
                <div class="profile-company-table-img">
                    <a href="#">
                        <img src="/img/bi.jpg" alt="bi">
                    </a>
                </div>
                <div class="profile-company-table-info">
                    <div class="profile-company-table-name">
                        <h5><strong><a href="#">BI-group</a></strong></h5>
                    </div>
                    <div class="profile-company-table-city">
                        <h5><i class="fa fa-map-marker"></i> Астана</h5>
                    </div>
                    <div class="profile-company-table-status">
                        <ul>
                            <li><p>Товаров 243</p></li>
                            <li><p>Материалов 82</p></li>
                            <li><p>Услуг 13</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- table 2 -->
            <div class="profile-company-table-item">
                <div class="profile-company-table-img">
                    <a href="#">
                        <img src="/img/bi.jpg" alt="bi">
                    </a>
                </div>
                <div class="profile-company-table-info">
                    <div class="profile-company-table-name">
                        <h5><strong><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></strong></h5>
                    </div>
                    <div class="profile-company-table-city">
                        <h5><i class="fa fa-map-marker"></i> Астана</h5>
                    </div>
                    <div class="profile-company-table-status">
                        <ul>
                            <li><p>Товаров 243</p></li>
                            <li><p>Материалов 82</p></li>
                            <li><p>Услуг 13</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- table 3 -->
            <div class="profile-company-table-item">
                <div class="profile-company-table-img">
                    <a href="#">
                        <img src="/img/bi.jpg" alt="bi">
                    </a>
                </div>
                <div class="profile-company-table-info">
                    <div class="profile-company-table-name">
                        <h5><strong><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, temporibus?</a></strong></h5>
                    </div>
                    <div class="profile-company-table-city">
                        <h5><i class="fa fa-map-marker"></i> Астана</h5>
                    </div>
                    <div class="profile-company-table-status">
                        <ul>
                            <li><p>Товаров 243</p></li>
                            <li><p>Материалов 82</p></li>
                            <li><p>Услуг 13</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- View table company end -->
        <!-- Profile status -->
        <div class="profile-status">
            <h4>Статистика</h4>
        </div>
    </div><!-- User profile end -->

@endsection