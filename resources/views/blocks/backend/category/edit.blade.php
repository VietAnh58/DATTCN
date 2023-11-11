@extends('layouts.backend.index')
@section('head')
  
@endsection
@section('content')

 @section('danhsach')
    Danh sách người dùng
@endsection

@section('title')
    Cập nhật Danh mục
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
   <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật Danh mục</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{ route('admin.category.update', $category) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $category->id }}">
            <div class="box-body">
                <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tên Danh mục</label>
                      <input type="text" class="form-control @error('title') is-invalid  @enderror" id="exampleInputEmail1" name="title" value="{{ old('title') ? old('title') : $category->title }}">
                      @error('title')
                          <span class="help-block" style="color: red">{{ $message }}</span>
                      @enderror
                    </div>
              {{-- <div class="form-group">
                <label for="exampleInputEmail1">Tên Danh mục</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"  value="{{ $category->title }}">
              </div> --}}
              <div class="form-group">
                <label for="exampleInputEmail1">Chọn Danh mục Cha</label>
                <select name="parent_id" id="input" class="form-control" required="required">
                    @foreach ($categories as $item)
                         {{-- <option value="{{ $item->id }}">{{ $item->title }}</option> --}}
                         <option value="{{ $item->id }}" {{ $category->parent_id == $item->id ? 'selected' : '' }}>{{ $item->title }}</option>

                        
                    @endforeach
                </select>
              </div>

              {{-- <div class="form-group">
                <label for="exampleInputEmail1">Chọn Vị trí</label>
                <select name="" id="input" class="form-control" required="required">
                  <option value="">1</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                </select>
              </div> --}}
              <div class="form-group">
                <label for="is_active">Chọn trạng thái</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="is_active" value="1" {{ $category->is_active == 1 ? 'checked' : '' }}>
                        Hiện
                    </label>
                    <label>
                        <input type="radio" name="is_active" value="0" {{ $category->is_active == 0 ? 'checked' : '' }}>
                        Ẩn
                    </label>
                </div>
                
              
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
          </form>
        </div>
     
        <!-- /.box -->

      </div>
    <!-- /.box -->

  </section>

@endsection