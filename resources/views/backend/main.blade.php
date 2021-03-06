<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public') }}/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{url('public')}}/backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/backend/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public')}}/backend/css/AdminLTE.css">
    <link rel="stylesheet" href="{{url('public')}}/backend/css/_all-skins.min.css">
    <link rel="stylesheet" href="{{url('public')}}/backend/css/jquery-ui.css">
    <link rel="stylesheet" href="{{url('public')}}/backend/css/style.css" />
    <!--  -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('admin.admin.index')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">BACKHOA_APTECH</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
       <div class="navbar-custom-menu">
          <ul class="nav navbar-nav navbar-right"  >     
           <li class="dropdown user user-menu"style="margin-right: 100px">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{url('public')}}/backend/images/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs">
                @if(Auth::check())
                  {{Auth::user()->name}}
                  @endif</p>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{url('public')}}/backend/images/avatar.png" class="img-circle" alt="User Image">
                <p>
                  @if(Auth::check())
                  {{Auth::user()->name}}
                  @endif</p>
                </p>
                <p>
                  @if(Auth::check())
                  {{Auth::user()->email}}
                  @endif</p>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-center" style="margin-left: 100px">
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         </ul>
      </div> 
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('public')}}/backend/images/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
            @if(Auth::check())
            {{Auth::user()->name}}
            @endif
          </p>
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
      <?php $user = Auth::user();?>
      <ul class="sidebar-menu" data-widget="tree">
        @if($user->can('admin.user.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.user.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch t??i kho???n</a></li>
            <li><a href="{{route('admin.user.create')}}"><i class="fa fa-circle-o"></i>Th??m m???i </a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.role.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-glass"></i>
            <span>Ph??n quy???n</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.role.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch</a></li>
            <li><a href="{{route('admin.role.create')}}"><i class="fa fa-circle-o"></i>Th??m m???i </a></li>
          </ul>
        </li>
         @endif
         @if($user->can('admin.banner.index'))
         <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-picture"></i>
            <span>Qu???n l?? banner </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
               <span class="btn  btn-xs btn-info right" >{{$banner_acount}}</span>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.banner.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch banner</a></li>
            <li><a href="{{route('admin.banner.create')}}"><i class="fa fa-circle-o"></i>Th??m m???i </a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.category.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-th-list"></i>
            <span>Qu???n l?? danh m???c</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="btn  btn-xs btn-info right" >{{$category_acount}}</span>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.category.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch danh m???c</a></li>
            <li><a href="{{route('admin.category.create')}}"><i class="fa fa-circle-o"></i>Th??m m???i danh m???c</a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.color.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Qu???n l?? color</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.color.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch</a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.size.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Qu???n l?? k??ch c???</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.size.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch</a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.product.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-gift"></i>
            <span>Qu???n l?? s???n ph???m</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="btn  btn-xs btn-info right" >{{$product_acount}}</span>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.product.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch s???n ph???m</a></li>
            <li><a href="{{route('admin.product.create')}}"><i class="fa fa-circle-o"></i>Th??m m???i s???n ph???m</a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.blog.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-globe"></i>
            <span>Qu???n l?? tin t???c</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="btn  btn-xs btn-info right" >{{$blog_acount}}</span>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.blog.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch tin t???c</a></li>
            <li><a href="{{route('admin.comment')}}"><i class="fa fa-circle-o"></i>Danh s??ch b??nh lu???n</a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.customer.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span>Qu???n l?? t??i kho???n</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="btn  btn-xs btn-info right" >{{$cus_acount}}</span>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.customer.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch kh??ch h??ng </a></li>
          </ul>
        </li>
        @endif
        @if($user->can('admin.order.index'))
        <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="glyphicon glyphicon-comment"></i>
            <span>Qu???n l?? ????n h??ng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="btn  btn-xs btn-info right" >{{$order_count}}</span>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{route('admin.order.store')}}"><i class="fa fa-circle-o"></i> Danh s??ch ????n h??ng</a></li>
            <li><a href="{{route('admin.wishlist.store')}}"><i class="fa fa-circle-o"></i> S???n ph???m y??u th??ch</a></li>
            <li><a href="{{route('admin.payment.store')}}"><i class="fa fa-circle-o"></i>Ph????ng th???c thanh to??n</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  @yield('content')


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">TTPM_BKAP</a>.</strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('public')}}/backend/js/jquery.min.js"></script>
<script src="{{url('public')}}/backend/js/jquery-ui.js"></script>
<script src="{{url('public')}}/backend/js/bootstrap.min.js"></script>
<script src="{{url('public')}}/backend/js/adminlte.min.js"></script>
<script src="{{url('public')}}/backend/js/dashboard.js"></script>
<script src="{{url('public/backend/tinymce')}}/tinymce.min.js"></script>
<script src="{{url('public/backend/tinymce')}}/config.js"></script>
<script src="{{url('public')}}/backend/js/app.js"></script>

<script src="{{url('public')}}/backend/js/function.js"></script>
<script>
  $('#modal-file').on('hide.bs.modal',function(){
    // l???y value c???a input c?? id=images
    var image = $('#images').val();

    $('#img').attr('src',image);
  });
  $('#modal-file-list').on('hide.bs.modal',function(){
    // l???y value c???a input c?? id=images
    var images = $('#imagesList').val();
    var imgList = $.parseJSON(images);
    var _html = '';
    for(var i=0;i<imgList.length;i++){
      _html +='<div class="col-md-3 thumbneil">';
      _html +='<img src="'+imgList[i]+'"class="img-responsive" style="max-height: 100px">';
      _html +='</div>';
    }
    $('#show').html(_html);
  });
</script>
@yield('script')
</body>
</html>
