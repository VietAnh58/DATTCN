<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
  <script src="{{ asset('backend/js/angular.min.js') }}"></script>
  <script src="{{ asset('backend/js/app.js') }}"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('blocks.backend.home.header')


  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('blocks.backend.home.sidebar')


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       @yield('danhsach')
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('blocks.backend.home.footer')


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/adminlte.min.js') }}"></script>
<script src="{{ asset('backend/js/dashboard.js') }}"></script>
<script src="{{ asset('backend/js/function.js') }}"></script>
@yield('custom.js')
@yield('alert')
</body>
</html>
