@extends('layouts.frontend.index')
@section('content')
<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            My Account
                        </li>
                    </ol>
                </div>
            </nav>

            <h1>My Account</h1>
        </div>
    </div>

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Đăng ký</h2>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <label for="register-email">
                                Email
                                <span class="required">*</span>
                            </label>
                            
                            <input type="text" class="form-control @error('email') is-invalid  @enderror" id="exampleInputEmail1" name="email">
                            
                            @error('email')
                                <span class="help-block" style="color: red">{{ $message }}</span><br>
                            @enderror

                            <label for="register-password">
                                Họ tên
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" name="name">
                            @error('name')
                                <span class="help-block" style="color: red">{{ $message }}</span><br>
                            @enderror
                            <label for="register-password">
                                Mật khẩu(Lớn hơn 6 ít hơn 32)
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-control @error('password') is-invalid  @enderror" id="exampleInputEmail1" name="password">
                            @error('password')
                                <span class="help-block" style="color: red">{{ $message }}</span><br>
                            @enderror

                                <label for="register-password">
                                    Nhập lại mật khẩu
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-control @error('re-password') is-invalid  @enderror" id="exampleInputEmail1" name="re-password" >
                                @error('re-password')
                                    <span class="help-block" style="color: red">{{ $message }}</span>  
                                @enderror
                                <a href="{{ route('login') }}" class="forget-password text-dark form-footer-right">Đã có tài khoản</a>

    
        
                            <div class="form-footer mb-2">
                            <button type="submit" class="btn btn-primary btn-md w-100 mr-0">
                                Đăng ký
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End .main -->
@endsection
