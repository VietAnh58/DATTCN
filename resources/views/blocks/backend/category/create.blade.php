@extends('layouts.backend.index')
@section('head')
  
@endsection
@section('content')

{{-- @section('danhsach')
    Danh sách người dùng
@endsection

@section('title')
    Trang người dùng
@endsection --}}

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
       <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Thêm mới menu</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('admin.category.store') }}">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Danh mục</label>
                    <input type="text" class="form-control @error('title') is-invalid  @enderror" id="exampleInputEmail1" name="title" placeholder="Nhập tên danh mục">
                    @error('title')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="parent_id">Chọn Danh mục cha</label>
                    <select name="parent_id" id="parent_id" class="form-control" required>
                        <option value="0">Không</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
                
  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Chọn trạng thái</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="is_active" id="input" value="1" checked="checked">
                        Hiện
                      </label>
                      <label>
                        <input type="radio" name="is_active" id="input" value="0">
                        Ẩn
                      </label>
                    </div>
                  </div>
                  
                </div>
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
              </form>
            </div>
         
            <!-- /.box -->
  
          </div>
        <!-- /.box -->
  
      </section>

@endsection