@extends('layouts.users.master')
@section('title','Login')
@section('content')


    <link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
    <div class="col-12 link">
        <div class="container">
            <div class="breadcrumb">
                <a class="home">Trang chủ</a>
                <span>>></span>
                <a class="sign-up">Đăng nhập tài khoản</a>
            </div>
        </div>
    </div>

    <div class="page-content-account">
        <div class="container">
            <div class="row">
                <div class="left-col ">
                    <div class="group-login group-log">
                        <h1>
                            Đăng nhập tài khoản
                        </h1>

                        <form method="post" action="{{ route('login') }}" id="customer_login" accept-charset="UTF-8">
                            @csrf
                            <fieldset class="form-group">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" value="" name="email" id="email" placeholder="Email" required="">
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Mật khẩu <span class="required">*</span> </label>
                                <input type="password" class="form-control form-control-lg" value="" name="password" id="password" placeholder="Mật khẩu" required="">
                            </fieldset>
                            <button class="btn-login" type="submit" value="Đăng nhập">Đăng nhập</button>

                            @if ($errors->any())
                                <div class="error">
                                    <span>{{ $errors->first() }}</span>
                                </div>
                            @endif
                        </form>


                    </div>

                </div>
                <div class="right-col ">
                    <h6>
                        Quyền lợi với thành viên
                    </h6>
                    <div>
                        <p>Vận chuyển siêu tốc</p>
                        <p>Sản phẩm đa dạng	</p>
                        <p>Đổi trả dễ dàng</p>
                        <p>Tích điểm đổi quà</p>
                        <p>Được giảm giá cho lần mua tiếp theo lên đến 10%</p>
                    </div>
                    <a href="{{ route('register') }}" class="btn-register-default">Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
@endsection