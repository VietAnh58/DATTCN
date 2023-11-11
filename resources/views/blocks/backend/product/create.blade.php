@extends('layouts.backend.index')
@section('head')

@endsection
@section('danhsach')
Danh sách Sản phẩm
@endsection

@section('title')
Trang thêm Sản phẩm
@endsection 
@section('content')

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới Sản phẩm</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <!-- Phần 1: Thông tin cơ bản -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Sản phẩm</label>
                                <input type="text" class="form-control @error('product_name') is-invalid  @enderror" id="exampleInputEmail1" name="product_name" placeholder="Nhập tên sản phẩm">
                                @error('product_name')
                                <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <input type="text" class="form-control @error('price') is-invalid  @enderror" id="exampleInputEmail1" name="price" placeholder="Nhập tên sản phẩm">
                                @error('price')
                                <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Giá khuyến mãi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="sale_price" placeholder="Nhập tên sản phẩm">
                                {{-- @error('product_name')
                                <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror --}}
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh sản phẩm</label>
                                {{-- <input type="file" class="form-control" id="exampleInputEmail1" name="photo"> --}}
                                <input type="file" class="form-control @error('image') is-invalid  @enderror" id="exampleInputEmail1" name="image">
                                @error('image')
                                <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh mô tả</label>
                                {{-- <input type="file" class="form-control" id="exampleInputEmail1" name="photos[]"  multiple> --}}
                                <input type="file" class="form-control @error('image') is-invalid  @enderror" id="exampleInputEmail1" name="images[]"  multiple>
                                @error('image')
                                <span class="help-block" style="color: red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">ID kho hàng</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="inventory_id" placeholder="Nhập Id kho hàng">
                            </div>
                            <div class="form-group @error('category_id') is-invalid  @enderror">
                              <label for="category_id">Chọn Danh mục</label>
                              <select name="category_id" id="category_id" class="form-control" required>
                               
                                  <option value="0">Không</option>
                                  @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->title }}</option>
                                  @endforeach
                              </select>
                              @error('category_id')
                              <span class="help-block" style="color: red">{{ $message }}</span>
                              @enderror
                          </div>
                        </div>
                        <!-- Phần 2: Thông tin khác -->
                        <div class="col-md-6">
                          
                            <div class="form-group">
                                <label for="exampleInputEmail1">Chi tiết</label>
                                <textarea name="description" id="create_product" rows="10" cols="80">
                                    
                                </textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sản phẩm tiêu biểu</label>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="is_featured" id="input" value="1" checked="checked">
                                    Có 
                                  </label>
                                  <label>
                                    <input type="radio" name="is_featured" id="input" value="0">
                                    Không
                                  </label>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Sản phẩm mới</label>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="is_new" id="input" value="1" checked="checked">
                                    Có 
                                  </label>
                                  <label>
                                    <input type="radio" name="is_new" id="input" value="0">
                                    Không
                                  </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Bán chạy</label>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="is_best_seller" id="input" value="1" checked="checked">
                                    Có 
                                  </label>
                                  <label>
                                    <input type="radio" name="is_best_seller" id="input" value="0">
                                    Không
                                  </label>
                                </div>
                              </div>
                        </div>
                    </div>
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

@section('custom.js')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#create_product' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
