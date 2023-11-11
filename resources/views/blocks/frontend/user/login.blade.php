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
                            <h2 class="title">Đăng nhập</h2>
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <label for="login-email">
                                Email
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control @error('email') is-invalid  @enderror" id="exampleInputEmail1" name="email">

                            @error('email')
                            <span class="help-block" style="color: red">{{ $message }}</span><br>
                            @enderror
    
                            <label for="login-password">
                                Mật khẩu
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-control @error('password') is-invalid  @enderror" id="exampleInputEmail1" name="password">

                            @error('password')
                            <span class="help-block" style="color: red">{{ $message }}</span><br>
                            @enderror
    
                            <div class="form-footer">
                                {{-- <div class="custom-control custom-checkbox mb-">
                                    <input type="checkbox" class="custom-control-input" id="lost-password" />
                                    <label class="custom-control-label mb-0" for="lost-password">Ghi nhớ</label>
                                </div> --}}
    
                                <a href="forgot-password.html" class="forget-password text-dark form-footer-right">Quên mật khẩu?</a>
                                
                            </div>
                            <button type="submit" class="btn btn-dark btn-md w-100 mb-3">Đăng nhập</button>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-md w-100 mb-3">Đăng ký</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main><!-- End .main -->
@endsection
