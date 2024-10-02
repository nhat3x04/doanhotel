@extends('layout.master')
@section('css')
@section('js')
@section('content')
<div id="apus-main-content" class="container-fluid bg-light py-4">
    <section id="apus-breadscrumb" class="breadcrumb-page apus-breadscrumb">
        <div class="container">
            <div class="wrapper-breads">
                <div class="wrapper-breads-inner">
                    <div class="breadscrumb-inner">
                        <ol class="breadcrumb">
                            
                            <li><span class="active">Tài khoản của tôi</span></li>
                            <li>&nbsp;&nbsp;>&nbsp;&nbsp;Thông tin</li>
                        </ol>
                    </div>
                    <h3 class="bread-title">Tài khoản của tôi</h3>
                </div>
            </div>
        </div>
    </section>
    
    <section id="main-container" class="container inner">
        <div class="row">
            <div class="col-md-3">
                <nav class="woocommerce-MyAccount-navigation">
                    <div class="mm-account">
                        <div class="mm-img">
                            <img src="https://online.mmvietnam.com/wp-content/themes/yozi-child/assets/icon/user-header.png">
                        </div>
                        <div class="mm-hello">
                            <div class="mm-account-for">Tài khoản của <g style="font-weight: bold;">{{$customer->FullName}}</g></div>
                            <div class="mm-account-name">
                                </div>
                        </div>
                    </div>
                    <ul class="mm-page-list">
                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                            <a href="/personal-information">
                                <img class="mm-account-menu-widget" src="https://online.mmvietnam.com/wp-content/themes/yozi-child/assets/icon/info.png">Thông tin cá nhân
                            </a>
                        </li>
                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                            <a href="/change-password">
                                <img class="mm-account-menu-widget" src="https://online.mmvietnam.com/wp-content/themes/yozi-child/assets/icon/map.png">Thay đổi mật khẩu
                            </a>
                        </li>
                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders is-active">
                            <a href="">
                                <img class="mm-account-menu-widget" src="https://online.mmvietnam.com/wp-content/themes/yozi-child/assets/icon/follow-order.png">Theo dõi booking
                            </a>
                        </li>
                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                            <a href="/logout">
                                <img class="mm-account-menu-widget" src="https://online.mmvietnam.com/wp-content/themes/yozi-child/assets/icon/logout.png">Đăng xuất
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            @yield('content2')
                
        </div>
    </section>
</div>







@endsection

 
    @endsection
    @endsection