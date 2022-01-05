<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MARCHO</title>
   <link rel="shortcut icon" type="image/x-icon" href="{{ url('public') }}/assets/images/icon/favicon.ico">
  <link rel="stylesheet" href="{{url('public')}}/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/bootstrap-3.3.6-dist/css/bootstrap-theme.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">

  <link href="{{url('public')}}/assets/css/animate.min.css" rel="stylesheet"/>
  <link href="{{url('public')}}/assets/css/owl.theme.default.css" rel="stylesheet"/>
  <link href="{{url('public')}}/assets/css/owl.carousel.css" rel="stylesheet"/>

  <!-- <link href="{{url('public')}}/assets/css/style1.css" > -->

  <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{ url('public') }}/assets/build/toastr.css" >
  
    <style type="text/css">
       @media only screen and (max-width: 600px) {
        .navbar-brand{
          margin-left: 0px!important;
        }
      }
      @media only screen and (max-width: 768px) {
        .navbar-brand{
          margin-left: 0px  !important;
        }
      }
      .dropdown{
        position: relative;
        display: inline-block;
      }
      .dropdown-menu{
        list-style: none;
        display: none;
        position: absolute;
        z-index: 2;
      }
      .dropdown:hover .dropdown-menu{
        display: block;
      }
      .dropdown-menu li a{
          text-decoration: none;
          color: #808080;
      }
      .banner{
        float: left;
      }
      #noidung{
        margin-top:8px;
      }  
    </style>   
</head>
<body>
<nav class="navbar navbar-default" style="margin-top: -20px">
    <div class="container-fluid" style="z-index: 2px">
      <div class="row">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand"  style="margin-left: 150px;margin-bottom: 13px;"href="{{route('home')}}"><img src="{{url('public')}}/assets/images/icon/logo.png" class=" banner"  alt="Image"></a>
          </div>
        <div  id="noidung"class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="">
                  <a href="{{route('home')}}">HOME</a>
                </li>
                <li>
                  <a href="{{route('shop')}}">SHOP</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGE<i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu" >
                      <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                      <li><a href="{{route('checkout')}}">Checkout</a></li>
                      <li><a href="{{route('cart')}}">Cart</a></li>
                      <li><a href="{{route('loi')}}">404</a></li>
                  </ul>
                </li>

                <li><a href="{{route('blog')}}">BLOG</a></li>
                <li><a href="{{route('contact')}}">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navs" style="margin-right: 100px" >
                <li class="dropdown ">
                  <a href=""class="glyphicon glyphicon-user"class="dropdown-toggle" data-toggle="dropdown"></a>
                  <ul class="dropdown-menu" >
                    @if(Auth::guard('cus')->check())
                      <li><a href="{{route('cart')}}">{{Auth::guard('cus')->user()->email}}</a></li>
                      <li><a href="{{route('dang_xuat')}}">Log out</a></li>
                    @else
                      <li><a href="{{route('register')}}">Register</a></li>
                      <li><a href="{{route('getlogin')}}">Login</a></li>
                    @endif
                  </ul>
                </li>
                
                 @if(Auth::guard('cus')->check())
                <li><a href="{{route('wishlist')}}"class="glyphicon glyphicon-heart-empty"><span ></span></a></li>
                 @else
                 <li><a href="{{route('getlogin')}}"class="glyphicon glyphicon-heart-empty"><span></span></a></li>
                  @endif
                <li ><a href="{{route('cart')}}"class="glyphicon glyphicon-shopping-cart "><span class="cart">({{$cart->total_quantity}}item)</span></a></li>
            </ul>
            <form action="{{route('Search')}}" method="get" class="navbar-form navbar-right" role="search"> 
                <div class="form-group">
                   <input type="text" class="form-control"  style="width: 150px;border: 1px solid rgba(900, 900, 900, 900);"name="key" placeholder="Search" style="">
                </div>
             <button style="height: 30px;border: none;background: none;" type="submit"class="glyphicon glyphicon-search "></button>
            </form>       
        </div>
      </div>
    </div>
</nav> 
@yield('content')
<div class="container-fluid" style="overflow:hidden;">
  <div class="row">
     <footer class="page-footer font-small indigo foot " style="margin-top: 100px;">
        <div class="container text-center text-md-left">
            <div class="row" style="margin-top: 100px;">
                <div class="col-md-3 mx-auto" style="margin-top: -30px;text-align: left; ">
                    <div> 
                      <img src="{{url('public')}}/assets/images/icon/logo.png" alt="" style="width: 130px;margin-top: 40px">
                    </div>
                    <br>
                    <ul class="list-unstyled">
                      <li>
                        <p>No,238 Hoang Quoc Viet</p>
                      </li>
                      <li>
                        <p>012 United states</p>
                      </li>
                      <li>
                        <p>youreemail.com</p>
                      </li>
                      <li>
                        <p>0962562810</p>
                      </li>
                      <li style="float: left;"><i class="fab fa-facebook-f"></i></li>
                      <li style="float: left; margin-left: 10px;"><i class="fab fa-twitter"></i></li>
                      <li style="float: left; margin-left: 10px;"><i class="fab fa-linkedin-in"></i></li>
                      <li style="float: left; margin-left: 10px;"><i class="fab fa-google"></i></li>
                      <li style="float: left; margin-left: 10px;"><i class="fab fa-pinterest-square"></i></li>
                    </ul>
                    <br>
                </div>
                <div class="col-md-3 mx-auto" style="text-align: left;">
                    <h4 class="font-weight-bold text-uppercase mt-3 mb-4"><b>uesful Links</b></h4>
                    <ul class="list-unstyled">
                      <li>
                        <a href="{{route('blog')}}"style="color:inherit;text-decoration:none">My Blog</a>
                      </li>
                      <li>
                        <a href="{{route('contact')}}"style="color:inherit;text-decoration:none">My Contact</a>
                      </li>
                      <li>
                        <a href="{{route('shop')}}"style="color: inherit;text-decoration:none">My Shop</a>
                      </li>
                    </ul>
                </div>
                <div class="col-md-3 mx-auto" style="text-align: left;">
                    <h4 class="font-weight-bold text-uppercase mt-3 mb-4"><b>My Account</b></h4>
                    <ul class="list-unstyled">
                      <li>
                        <a href=""style="color: inherit;text-decoration: none">My Account</a>
                      </li>
                      <li>
                        <a href="{{route('cart')}}"style="color: inherit;text-decoration:none">My cart</a>
                      </li>
                      <li>
                        <a href="{{route('wishlist')}}"style="color: inherit;text-decoration: none">My wislist</a>
                      </li>
                      <li>
                        <a href="{{route('checkout')}}"style="color: inherit;text-decoration: none">Check out</a>
                      </li>
                    </ul>
                </div>
                <div class="col-md-3 mx-auto" style=" text-align: left">
                    <h4 class="font-weight-bold text-uppercase mt-3 mb-4"><b>subscribe Our Newsletter</b></h4>
                    <ul class="list-unstyled">
                      <li>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis</p>
                      </li>
                      <li>
                      <button type="submit" class="btn btn-primary mb-2">subscribe</button>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
              </div>
            </div>
        </div>
    </footer>
  </div>
</div>

<!-- jQuery -->
<script src="{{url('public')}}/assets/js/jquery.min.js"></script>
<script src="{{url('public')}}/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="{{url('public')}}/assets/js/jquery.ez-plus.js"></script>
<script src="{{url('public')}}/assets/js/icon.js" ></script>
<script src="{{url('public')}}/assets/js/main.js"></script>
<script src="{{url('public')}}/assets/js/plugins.js"></script>
<script src="{{url('public')}}/assets/js/jquery.min.js"></script>

<script src="{{url('public')}}/assets/build/toastr.min.js"></script>
<script src="{{url('public')}}/assets/js/carousel.min.js"></script>

<script  src="{{url('public')}}/assets/js/ex.js"></script>
<script type="text/javascript" src="{{url('public')}}/assets/js/web.js"></script>
@yield('script')
</body>
</html>  