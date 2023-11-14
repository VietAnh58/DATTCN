@extends('layouts.backend.index')
@section('head')
@endsection
@section('content')

@section('danhsach')
    Danh sách thùng rác menu
@endsection

@section('title')
    Danh sách thùng rác menu
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
                            <th style="width:150px">Tên menu</th>
                            <th style="width:150px">Bí danh</th>
                            <th>Vị trí</th>
                            <th>Đường dẫn</th>
                            <th>Hoạt động</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @if ($menus->isEmpty())
                            <tr>
                                <td colspan="7">Không có menunào.</td>
                            </tr>
                        @else
                            @foreach ($menus as $item)
                                <tr>
                                  <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->alias }}</td>
                                    <td>{{ $item->order_number }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>{!! $item->is_active ? '<span class="label label-success">Hiển thị</span>' : '<span class="label label-danger">Không hiển thị</span>' !!}</td>
                                    <td>
                                      <a href="{{ route('admin.menu.restore', $item->id) }}" class="btn btn-success">Khôi phục</a>
                                      <a href="{{ route('admin.menu.force_delete', $item->id) }}" class="btn btn-danger">Xóa</a>
                                      </td>
                                    </tr>
                                </tr>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.box -->

</section>

@endsection
