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
    <div class="row">
        <!-- Phần 1: Bên trái -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cập nhật Sản phẩm</h3>
                </div>
                <!-- form start -->
                <form role="form" method="post" action="{{ route('admin.product.update', $product) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <div class="box-body">
                        <!-- Trường dữ liệu bên trái -->
                        <div class="form-group">
                        <label for="exampleInputEmail1">Tên Sản phẩm</label>
                        <input type="text" class="form-control @error('title') is-invalid  @enderror" id="exampleInputEmail1" name="title" value="{{ old('title') ? old('title') : $product->product_name }}">
                        @error('title')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                        <input type="text" class="form-control @error('price') is-invalid  @enderror" id="exampleInputEmail1" name="price" value="{{ old('price') ? old('price') : $product->price }}">
                        @error('price')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá khuyến mãi</label>
                        <input type="text" class="form-control @error('sale_price') is-invalid  @enderror" id="exampleInputEmail1" name="sale_price" value="{{ old('sale_price') ? old('sale_price') : $product->sale_price }}">
                        @error('sale_price')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh sản phẩm</label>
                        <input type="file" class="form-control @error('image') is-invalid  @enderror" id="exampleInputEmail1" name="image">
                        @error('image')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh mô tả</label>
                        <input type="file" class="form-control @error('image') is-invalid  @enderror" id="exampleInputEmail1" name="images[]" multiple>
                        @error('image')
                        <span class="help-block" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Danh mục sản phẩm</label>
                      <select name="category_id" class="form-control" required>
                          @foreach ($categories as $category)
                              <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sản phẩm tiêu biểu</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="is_featured" id="input" value="1" {{ $product->is_featured == 1 ? 'checked' : '' }}>
                        Có 
                      </label>
                      <label>
                        <input type="radio" name="is_featured" id="input" value="0" {{ $product->is_featured == 0 ? 'checked' : '' }}>
                        Không
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sản phẩm mới</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="is_new" id="input" value="1" {{ $product->is_new == 1 ? 'checked' : '' }}>
                        Có 
                      </label>
                      <label>
                        <input type="radio" name="is_new" id="input" value="0" {{ $product->is_new == 0 ? 'checked' : '' }}>
                        Không
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bán nhiều nhất</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="is_best_seller" id="input" value="1" {{ $product->is_best_seller == 1 ? 'checked' : '' }}>
                        Có 
                      </label>
                      <label>
                        <input type="radio" name="is_best_seller" id="input" value="0" {{ $product->is_best_seller == 0 ? 'checked' : '' }}>
                        Không
                      </label>
                    </div>
                  </div>
                  {{-- <div class="form-group">
                      <label for="exampleInputEmail1">ID Kho hàng</label>
                      <input type="text" class="form-control @error('store_id') is-invalid  @enderror" id="exampleInputEmail1" name="store_id" value="{{ old('store_id') ? old('store_id') : $product->inventory_id }}">
                      @error('store_id')
                      <span class="help-block" style="color: red">{{ $message }}</span>
                      @enderror
                  </div> --}}
                        <!-- Thêm các trường dữ liệu khác ở đây -->
                    </div>
            </div>
        </div>

        <!-- Phần 2: Bên phải -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin khác</h3>
                </div>
                    <div class="box-body">
                        <!-- Trường dữ liệu bên phải -->
                         <div class="form-group">
                        <label for="edit_product">Chi tiết</label>
                        <textarea name="description" id="edit_product" rows="10" cols="80">{{ $product->description }}</textarea>
                    </div>
                   
                        <!-- Thêm các trường dữ liệu khác ở đây -->
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Sửa</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.box -->
</section>
@endsection

@section('custom.js')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#edit_product'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
