@extends('layouts.backend.index')

@section('head')
  
@endsection

@section('content')
@section('danhsach')
    Danh sách người dùng
@endsection

@section('title')
    Cập nhật menu
@endsection 

<!-- Main content -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<section class="content">
    <!-- Default box -->
    <div class="row">
        <!-- Phần 1: Bên trái -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cập nhật menu</h3>
                </div>
                <!-- form start -->
                <form role="form" method="post" action="{{ route('admin.menu.update', $menu) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $menu->id }}">
                    <div class="box-body">
                        <!-- Trường dữ liệu bên trái -->
                        <div class="form-group">
                        <label for="exampleInputEmail1">Tên menu</label>
                        <input type="text" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" name="name" value="{{ old('name') ? old('name') : $menu->name }}">
                        @error('name')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bí danh</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ $menu->alias }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Đường dẫn</label>
                        <input type="text" class="form-control @error('link') is-invalid  @enderror" id="exampleInputEmail1" name="link" value="{{ old('link') ? old('link') : $menu->link }}">
                        @error('link')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Vị trí</label>
                        <input type="number" class="form-control @error('order_number') is-invalid  @enderror" id="exampleInputEmail1" name="order_number" value="{{ old('order_number') ? old('order_number') : $menu->order_number }}">
                        @error('order_number')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hoạt động</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="is_active" id="input" value="1" {{ $menu->is_active == 1 ? 'checked' : '' }}>
                        Có 
                      </label>
                      <label>
                        <input type="radio" name="is_active" id="input" value="0" {{ $menu->is_active == 0 ? 'checked' : '' }}>
                        Không
                      </label>
                    </div>
                  </div>
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- /.box -->
</section>
@endsection

