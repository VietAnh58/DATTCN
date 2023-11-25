@extends('layouts.backend.index')
@section('head')
  
@endsection
@section('content')

 @section('danhsach')
    Danh sách thùng rác sản phẩm
@endsection

@section('title')
    Danh sách thùng rác sản phẩm
@endsection 

    <section class="content">

      <!-- Default box -->
      <div class="col-xs-12">
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
          <div class="box">
            <div class="box-header">
                <a href="{{ route('admin.product.index') }}" class="btn btn-success">Trờ về </a>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                  <th style="width:150px">Tên Sản phẩm</th>
                  <th style="width:150px">Bí danh</th>
                  <th>Giá sản phẩm</th>
                  <th>Giá giảm</th>
                  <th>Ảnh sản phẩm</th>
                  <th>Danh mục</th>
                  <th>ID kho hàng</th>
                  <th>Tùy chọn</th>
                </tr>
                @if($products->isEmpty())
                <tr>
                    <td colspan="7">Không có Sản phẩm nào.</td>
                </tr>
            @else
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->alias }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->sale_price }}</td>
                        <td>
                          <img src="{{ asset('storage/images') }}/{{ $item->image }}" alt="" width="150px">
                        </td>
                        <td>{{ $item->category->title }}</td>
                        <td>{{ $item->inventory_id }}</td>
                        <td>
                          <a href="{{ route('admin.product.restore', $item->id) }}" class="btn btn-success">Khôi phục</a>
                          <a href="{{ route('admin.product.force_delete', $item->id) }}" class="btn btn-danger">Xóa</a>
                          </td>
                        </tr>
                @endforeach
            @endif

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>

@endsection