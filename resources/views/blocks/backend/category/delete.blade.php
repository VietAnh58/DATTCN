@extends('layouts.backend.index')
@section('head')
  
@endsection
@section('content')
<div class="card mb-4">
@section('danhsach')
    Danh sách phân quyền
@endsection

@section('table_title')
Xóa phân quyền
@endsection

@section('title')
Xóa phân quyền
@endsection
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Xóa phân quyền</h3>
            </div>
            <form method="POST" action="{{ route('admin.category.delete_category', $category->id) }}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID (Tự động tăng)</label>
                    <input type="text" class="form-control"  id="exampleInputPassword1" disabled value="{{ $category->id }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tên danh mục</label>
                    <input type="text" class="form-control" name="title" id="exampleInputPassword1" disabled value="{{ $category->title }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Bí danh</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" disabled  value="{{ $category->alias }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ID cha</label>
                <input type="text" class="form-control" name="parent_id" id="exampleInputPassword1" disabled value="{{ $category->parent_id }}">
              </div>
              <td>@if($category->is_active == 1)
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked disabled>
                  </div>
                </div>
              @elseif ($category->is_active == 0)
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"  disabled>
                </div>
              </div>
              @endif</td>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-danger swalDefaultSuccess">
                        Xác nhận
                    </button>
                    </div>
                </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection