@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid khoangcach" style="margin-top: -20px" >
	<div class="row">
        <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
            <div class="container">
                <h1 class="text-light">Products</h1>
                <div class="sep-sm bg-light chu"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-light">
                        <li  class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Products</a></li>
                    </ol>
                </nav>
            </div>
        </div>
	</div>	
</div>
<div class="main-content py-100">
    <div class="container">
        <div class="mb-100 overflow-hidden">
            <div class=" card-item-slider ltr" id="itemSliderLight">
                @foreach($product as $value)
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="item">
                    <div class="card-item card-item--light">
                        <div class="card-item__bg">
                            <a href="#"><img src="{{url('uploads')}}/{{$value->images}}"  style="width: 100%,height: 500px" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="card-item__body">
                            <div class="product-info__price">
                              @if($value->sale_price==0)
                                <span class=" gia">{{$value->price}}k</span>
                              @else         
                                <span class=" gia">{{$value->sale_price}}k</span>
                                <span class="old " style="text-decoration: line-through;">{{$value->price}}k</span>
                              @endif
                            </div>
                            <div class="card-item__body--title">
                                <h3>{{$value->name}}</h3>
                            </div>
                            <div class="product-rate">
                                <span class="rating" data-id="154277"> 
                                    <a href="#" class="fa-star fa"></a>
                                    <a href="#" class="fa-star fa"></a>
                                    <a href="#" class="fa-star fa"></a>
                                    <a href="#" class="fa fa-star"></a>
                                    <a href="#" class="fa-star fa"></a> 
                                </span>
                            </div>
                        </div>
                        <div class="card-item__overlay">
                            <ul class="action-btn">
                                <li><a href="{{route('single',$value->product_id)}}" class="icon-box"><i class="fas fa-search"style="font-size: 15px; color:black"></i></a></li>
                                <li class="wishlist-btn">
                                  <span class="icon-box">
                                    <a  href="{{route('addWishlist',['id'=>$value->product_id])}}"class="far fa-heart" style="font-size: 15px; color:black; text-decoration: none"></a>
                                  </span>
                                </li>
                            </ul>
                            <a href="{{route('add',['id'=>$value->product_id])}}" class="btn" >Add to cart</a>
                        </div>
                    </div>
                </div>
                </div>
                 @endforeach()
            </div>
        </div>
        <!-- end items slider light -->
    </div>
</div>
@stop()