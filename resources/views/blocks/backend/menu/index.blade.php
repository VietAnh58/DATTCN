@extends('layouts.backend.index')
@section('head')
@endsection
@section('content')

@section('danhsach')
    Danh sách menu
@endsection

@section('title')
    Danh sách menu
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
                <a href="{{ route('admin.menu.create') }}" class="btn btn-success">Thêm menu </a>
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
                                <td colspan="7">Không có menu nào.</td>
                            </tr>
                        @else
                            @foreach ($menus as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->alias }}</td>
                                    <td>{{ $item->order_number }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>{!! $item->is_active
                                        ? '<span class="label label-success">Hiển thị</span>'
                                        : '<span class="label label-danger">Không hiển thị</span>' !!}</td>
                                    <td colspan="2">
                                        <a href="{{ route('admin.menu.edit', $item->id) }}"
                                            class="btn btn-success">Sửa</a>
                                        {{-- <a href="{{ route('admin.menu.delete', $item->id) }}"
                                            class="btn btn-danger">Xóa</a> --}}
                                    </td>
                                    <td>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('admin.menu.destroy', $item) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger"
                                                onclick="confirmDelete({{ $item->id }})">Xóa</button>
                                        </form>
                                </tr>
                            @endforeach
                        @endif
                        <tr>
                            <td><a href="{{ route('admin.menu.trash') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-trash-can"></i> Thùng rác</a></td>
                        </tr>
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
