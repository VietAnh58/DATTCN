<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('backend/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        @if (Auth::guard('admin')->check())
          <p>{{ Auth::guard('admin')->user()->name }}</p>
      @endif
    
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

    <ul class="sidebar-menu" data-widget="tree">

      <li>
        <a href="menu.html">
          <i class="fa fa-th"></i> <span>Quản lý Menu </span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">FE</small>
          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Quản lý banner</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-circle-o"></i> Quản lý danh mục</a></li>
          <li><a href="{{ route('admin.product.index') }}"><i class="fa fa-circle-o"></i> Quản lý sản phẩm</a></li>
          <li><a href="{{ route('admin.menu.index') }}"><i class="fa fa-circle-o"></i> Quản lý menu</a></li>
          <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-circle-o"></i> Quản lý tài khoản người dùng</a></li>
          <li><a href="{{ route('admin.adminUser.index') }}"><i class="fa fa-circle-o"></i> Quản lý tài khoản quản trị</a></li>
        </ul>
      </li>
      
      <li>
        <a href="{{ route('index') }}">
          <i class="fa fa-th"></i> <span>Trang người dùng</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">Hot</small>
          </span>
        </a>
      </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>