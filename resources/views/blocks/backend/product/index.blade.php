@extends('layouts.backend.index')
@section('head')
@endsection
@section('content')

@section('danhsach')
    Danh sách Sản phẩm
@endsection

@section('title')
    Trang Sản phẩm
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
                <a href="{{ route('admin.product.create') }}" class="btn btn-success">+Thêm mới Sản phẩm</a>

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
                            <th style="width:100px">Tên Sản phẩm</th>
                            <th style="width:100px">Bí danh</th>
                            <th>Giá sản phẩm</th>
                            <th>Giá giảm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Sản phẩm tiêu biểu</th>
                            <th>Sản phẩm mới</th>
                            <th>Bán chạy</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @if ($products->isEmpty())
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

                                        <img src="{{ asset('storage/images') }}/{{ $item->image }}" alt=""
                                            width="150px">
                                    </td>
                                    <td>{{ $item->category->title }}</td>
                                    {{-- <td>{{ $item->inventory_id }}</td> --}}
                                    <td>
                                        @if ($item->is_featured == 1)
                                            <span class="label label-success">Hiển thị</span>
                                        @else
                                            <span class="label label-danger">Đang ẩn</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->is_new == 1)
                                            <span class="label label-success">Hiển thị</span>
                                        @else
                                            <span class="label label-danger">Đang ẩn</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->is_best_seller == 1)
                                            <span class="label label-success">Hiển thị</span>
                                        @else
                                            <span class="label label-danger">Đang ẩn</span>
                                        @endif
                                    </td>
                                    <td colspan="2">
                                        <a href="{{ route('admin.product.edit', $item) }}"
                                            class="btn btn-success">Sửa</a>
                                    </td>
                                    <td>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('admin.product.destroy', $item) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger"
                                                onclick="confirmDelete({{ $item->id }})">Xóa</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        <tr>
                            <td><a href="{{ route('admin.product.trash') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-trash-can"></i> Thùng rác</a></td>
                        </tr>
                        <ul class="pagination toolbox-item">
                            <!-- Nút trang trước -->
                            @if ($products->currentPage() == 1)
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="fa-solid fa-angle-left"></i></i></a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="{{ $products->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></i></a>
                                </li>
                            @endif

                            <!-- Các trang được liệt kê -->
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <!-- Nút trang tiếp theo -->
                            @if ($products->currentPage() == $products->lastPage())
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="fa-solid fa-angle-right"></i></i></a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="{{ $products->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></i></a>
                                </li>
                            @endif
                        </ul>
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

@section('alert')
<script>
    function confirmDelete(itemId) {
        if (confirm('Bạn có chắc chắn muốn xóa mục này không?')) {
            // Nếu người dùng đồng ý xóa, thì gửi biểu mẫu xóa
            document.getElementById('delete-form-' + itemId).submit();
        }
    }
</script>
@endsection
