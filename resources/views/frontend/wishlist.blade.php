@extends('frontend.main')
<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid khoangcach" style="margin-top: -20px">
    <div class="row">
        <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
            <div class="container">
                <h1 class="text-light chu">WISHLIST</h1>
                <div class="sep-sm bg-light"></div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb text-light">
                    <li class="glyphicon glyphicon-home"><a href="route('home')" style="text-decoration: none;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Wishlist</a></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>  
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                          <tr class="tdd">
                            <th><span>Image</span></th>
                            <th class="text-center"><span>Product</span></th>
                            <th><span>Price</span></th>
                            <th>&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($product as $wishlist)
                          <tr>
                            <td>
                              <img src="{{url('uploads')}}/{{$wishlist->images}}" alt="">
                            </td>
                            <td class="text-center">
                              <p>{{$wishlist->name}}</p>
                            </td>
                            <td>
                              <p>{{$wishlist->price}}k</p>
                            </td>
                            <td style="width: 20%;">
                              <a href="{{route('removeWish',$wishlist->product_id)}}" class="table-link danger">
                                <span class="fa-stack">
                                  <i class="fa fa-square fa-stack-2x"></i>
                                  <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                </span>
                              </a>
                            </td>
                          </tr>
                          @endforeach()
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</div>
@stop()