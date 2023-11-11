@extends('layouts.backend.index')
@section('head')
  
@endsection
@section('content')

 @section('danhsach')
    Danh sách danh mục
@endsection

@section('title')
    Trang danh mục
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
           <a href="{{ route('admin.category.create') }}" class="btn btn-success">+Thêm mới Danh mục</a>

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
                <tbody><tr>
                    <th>ID</th>
                  <th>Tên Danh mục</th>
                  <th>Bí danh</th>
                  <th>ID Cha</th>
                  <th>Trạng thái</th>
                  <th>Ngày khởi tạo</th>
                  <th>Tùy chọn</th>
                </tr>
                @if($categories->isEmpty())
                <tr>
                    <td colspan="7">Không có danh mục nào.</td>
                </tr>
            @else
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->alias }}</td>
                        {{-- <td>{{ $item->parentCategory->title }}</td> --}}
                        <td>{{ $item->parentCategory->title}}</td>
                        <td>{!! $item->is_active ? '<span class="label label-success">Hiển thị</span>' : '<span class="label label-danger">Không hiển thị</span>' !!}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.category.edit', $item) }}" class="btn btn-success">Sửa</a>
                            <a href="{{ route('admin.category.delete', $item) }}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
                <tr>
                  <td><a href="{{ route('admin.category.trash') }}" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i> Thùng rác</a></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>

@endsection