@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid" style="margin-top: -20px">
  	<div class="row">
        <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
            <div class="container">
                <h1 class="text-light">Product Detail</h1>
                <div class="sep-sm bg-light"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-light">
                        <li  class="glyphicon glyphicon-home"><a href="route('home')" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Product Detail</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>	
</div>
<section>
  	<div class="container">
  		  <div class="row">
      			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div  class="anhzoom">
                <img style="width:250px;height: 300px" id="img_01"src="{{url('uploads')}}/{{$pro->images}}"/>
                <div id="gal1" style="width:280px;height: 100px;margin-top: 20px">
                    @foreach($img_pro as $img)
                    <a href="#" data-image="{{url('uploads')}}/{{$img->images}}">
                        <img id="img_01"src="{{url('uploads')}}/{{$img->images}}"width="100" style="width: 70px" /></a>
                    @endforeach() 
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 anhzoom ">
                <h3>{{$pro->name}}</h3>
                <div class="cap" >
                    <span class="rating" data-id="154277"> 
                        @for($i =1 ;$i<=5;$i++)
                          @if($i<=$pro->number_star($pro->product_id))
                            <span href="#" class="fa-star fa"></span>
                          @else
                            <span href="#" class="far fa-star"></span>
                          @endif
                         @endfor
                    </span>
                </div>
                <div class="price_box">
                  @if($pro->sale_price==0)
                    <span class=" gia">{{$pro->price}}k</span>
                  @else
                    <span class=" gia">{{$pro->sale_price}}k</span>
                    <span class="old " style="text-decoration: line-through;">{{$pro->price}}k</span>
                  @endif
                </div>
                <div class="product_desc" style="margin-top: 20px">
                  <p style="font-size: 15px"><b>Description:</b> {{$pro->description}} </p>
                </div>
                <hr>
                <form action="{{route('add',['id'=>$pro->product_id])}}"  method="get" class="form-inline" role="form">
                <div class="product-info__color">
                    <h6 class="title">Colors:</h6>
                    <div class="widget">
                        <div class="widget__body">
                            <ul class="color-list">
                                @foreach($listColor as $value)
                                <li class="color-list__item">
                                    <label for="color_{{$value->color_id}}" style="background-color: {{$value->name}}" data-allow-multiple=""  class="btn-color"> </label>
                                    <input type="checkbox" name="color_id" value="{{$value->color_id}}" id="color_{{$value->color_id}}" class="input-invisible">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-info__size">
                    <h6 class="title">Size:</h6>
                    <div class="widget">
                        <div class="widget__body">
                            <ul class="list-size">
                                 @foreach($listSize as $value)
                                <li class="size-list__item">
                                    <label for="size_{{$value->size_id}}"data-allow-multiple=""  class="btn-size">{{$value->name}} </label>
                                    <input type="checkbox" name="size_id"  value="{{$value->size_id}}" id="size_{{$value->size_id}}" class="input-invisible">
                                </li>
                               @endforeach()
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                      <label>Quantity:</label>
                      <input min="1" max="10" value="1" name="quantity" type="number">
                    </div>
                  <button type="submit" class="cart" >Add to cart</button>
                </form>
        </div>
    </div>
    <div class="container">
      	<div class="row">
        		<div class="border col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#home">Description</a></li>
                  <li><a data-toggle="pill" href="#menu1">Reviews</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <p>{{$pro->description}}</p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      @foreach($rating as $ra)
                        <div class="container" style="margin-top: 20px">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="{{url('public')}}/assets/images/anhdaidien/avatar.jpg" style="width: 100px"alt="">
                              </div>
                                <div class="col-md-10">
                                    <h3>{{$ra->cus->name}}</h3>
                                    <span class="saovang" data-id="154277"> 
                                      <a href="#" class="fa-star fa"></a>
                                      <a href="#" class="fa-star fa"></a>
                                      <a href="#" class="fa-star fa"></a>
                                      <a href="#" class="fa fa-star"></a>
                                      <a href="#" class="fa-star fa"></a> 
                                    </span>
                                    <span>({{$ra->star}})</span>
                                    <p>{{$ra->created_at}}</p>
                                    <p>{{$ra->content}}</p>
                                </div>
                            </div>
                        </div>
                      @endforeach()
                    </div>
                </div>      
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="container">
                  <span id="rateMe4"  class="feedback"></span>
                </div>
                <form action="{{route('danhgia',$pro->product_id)}}" method="POST" role="form">
                    <legend>Add your review</legend>
                    @csrf
                    @if(Session::has('thanhcong'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{Session::get('thanhcong')}}</strong> 
                    </div>
                    @endif
                    <div class="form-group">
                        <div class='rating-stars text-center'>
                            <ul id='stars' name='number_rating'>
                                <li class='star' title='Poor' data-value='1'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Fair' data-value='2'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Good' data-value='3'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Excellent' data-value='4'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='WOW!!!' data-value='5'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                            </ul>
                        </div>
                        <div class='success-box'>
                            <div class='clearfix'></div>
                            <div class='text-message'></div>
                            <div class='clearfix'></div>
                        </div>
                        <input type="hidden" id="rating_start" class="form-control" name="star"placeholder="Input field" >
                    <div class="form-group">
                      <label for="">Content</label> 
                      <textarea name="content" id="input" class="form-control" id="content" rows="3" required="required"></textarea>
                    </div>
                   <button type="submit" class="btn btn-primary js_rating_product" style="font-size: 15px;">LEAVE REWIEW</button>
                </form>
            </div>
          <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px; text-align: center">
        <div class="row">
          <h3><b>Related Products</b></h3>
        </div>
        <!-- <div>
          @foreach($product as $sp)
            <div class="col-md-3">
                <img src="{{url('uploads')}}/{{$sp->images}}" class="img-responsive" alt="">
                <div class="caption">
                    <span class="saovang1" data-id="154277"> 
                          @for($i =1 ;$i<=5;$i++)
                            @if($i<=$sp->number_star($sp->product_id))
                              <span href="#" class="fa-star fa"></span>
                            @else
                              <span href="#" class="far fa-star"></span>
                            @endif
                           @endfor
                      </span>
                    <h3>{{$sp->name}}</h3>
                    <div class="product-info__price">
                      @if($sp->sale_price==0)
                      <span class=" gia">{{$sp->price}}k</span>
                      @else
                      <span class=" gia">{{$sp->sale_price}}k</span>
                      <span class="old " style="text-decoration: line-through;">{{$sp->price}}k</span>
                      @endif
                    </div>
                </div>
            </div>
          @endforeach() 
        </div> -->
        <div class="main-content py-100">
          <div class="container">
              <div class="mb-100 overflow-hidden">
                  <div class=" card-item-slider ltr" id="itemSliderLight">
                      @foreach($product as $value)
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
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
                                          @for($i =1 ;$i<=5;$i++)
                                            @if($i<=$value->number_star($value->product_id))
                                              <span href="#" class="fa-star fa"></span>
                                            @else
                                              <span href="#" class="far fa-star"></span>
                                            @endif
                                           @endfor
                                      </span>
                                  </div>
                              </div>
                              <div class="card-item__overlay">
                                  <ul class="action-btn">
                                      <li><a href="{{route('single',$value->product_id)}}" class="icon-box"><i class="glyphicon glyphicon-search"style="font-size: 15px; color:black"></i></a></li>
                                      <li class="wishlist-btn">
                                        <span class="icon-box">
                                          <a  href="{{route('addWishlist',['id'=>$value->product_id])}}"class="glyphicon glyphicon-heart-empty" style="font-size: 15px; color:black; text-decoration: none"></a>
                                        </span>
                                      </li>
                                  </ul>
                                  <a onclick="AddCart('{{$value->product_id}}')" href="javascript:" class="btn" >Add to cart</a>
                              </div>
                          </div>
                      </div>
                      </div>
                       @endforeach()
                  </div>
              </div>
          </div>
        </div>
    </div>
</section>
@stop()
@section('script')
 @if(Session::has('success'))
  <script>
       Command: toastr["success"]("Thêm mới giỏ hàng thành công")
        toastr.options = {
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": 300,
          "hideDuration": 1000,
          "timeOut": 5000,
          "extendedTimeOut": 1000,
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        </script>            
  @endif
  <!-- Màu sắc -->
  <script>
       $(document).on("change", ".widget__body input[type=checkbox]", function () {
        var el = $(this).closest(".color-list__item").find('label');
        if (this.checked) {
            el.addClass('active');
        } else {
            el.removeClass('active');
        }
    });
  </script>
  <!-- Size -->
  <script>
       $(document).on("change", ".widget__body input[type=checkbox]", function () {
        var el = $(this).closest(".size-list__item").find('label');
        if (this.checked) {
            el.addClass('active');
        } else {
            el.removeClass('active');
        }
    });
  </script>
  <script>
    function AddCart(id){
      $.ajax({
        url:'cart/add/'+id,
        type:'GET',
      }).done(function(response){
        Command: toastr["success"]("Thêm mới giỏ hàng thành công")
        toastr.options = {
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": 300,
          "hideDuration": 1000,
          "timeOut": 5000,
          "extendedTimeOut": 1000,
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        console.log(response);
        $("#cart-items").empty();
        $("#cart-items").html(response);
        $("#cart-items").html($('.cart').html());
      });
    };
  </script>
@stop()
