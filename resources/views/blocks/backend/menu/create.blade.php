@extends('layouts.backend.index')
@section('head')
@endsection
@section('danhsach')
    Danh sách menu
@endsection

@section('title')
    Trang thêm menu
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới menu</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('admin.menu.store') }}">
                    @csrf
                    <div class="box-body">
                        <!-- Phần 1: Thông tin cơ bản -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên menu</label>
                                <input type="text" class="form-control @error('name') is-invalid  @enderror"
                                    id="exampleInputEmail1" name="name" placeholder="Nhập tên menu">
                                @error('name')
                                    <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Đường dẫn tới trang</label>
                                <input type="text" class="form-control @error('link') is-invalid  @enderror"
                                    id="exampleInputEmail1" name="link" placeholder="Nhập Đường dẫn tới trang">
                                @error('link')
                                    <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control @error('order_number') is-invalid  @enderror"
                                    id="exampleInputEmail1" name="order_number" placeholder="Nhập Vị trí">
                                @error('order_number')
                                    <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hoạt động</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="is_active" id="is_active_1" value="1"
                                            checked="checked">
                                        Có
                                    </label>
                                    <label>
                                        <input type="radio" name="is_active" id="is_active_0" value="0">
                                        Không
                                    </label>
                                </div>
                            </div>
                            <div class="box-footer">
                                <!-- Nếu cần -->
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>


                        </div>

                </form>
            </div>

            <!-- /.box -->
    </section>
@endsection
