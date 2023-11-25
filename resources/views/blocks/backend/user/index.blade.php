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
                <a href="#" class="btn btn-success">+Thêm mới Sản phẩm</a>

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
                            <th >Tên Người dùng</th>
                            <th >Email</th>
                            <th>Mật khẩu</th>
                            <th>Tùy chọn</th>
                        </tr>
                        @if ($user->isEmpty())
                            <tr>
                                <td colspan="7">Không có Sản phẩm nào.</td>
                            </tr>
                        @else
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->password }}</td>
                                    {{-- <td colspan="2">
                                        <a href="#"
                                            class="btn btn-success">Sửa</a>
                                    </td> --}}
                                    <td>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('admin.user.destroy', $item) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger"
                                                onclick="confirmDelete({{ $item->id }})">Xóa</button>
                                        </form>

                                    </td>
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
