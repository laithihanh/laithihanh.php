@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid khoangcach" style="margin-top: -20px" >
    <div class="row">
        <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
          <div class="container">
            <h1 class="text-light">CHECKOUT PAGES</h1>
            <div class="sep-sm bg-light chu"></div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li  class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Checkout</a></li>
                </ol>
              </nav>
          </div>
        </div>
    </div>	
</div>
<form action="{{route('checkout')}}" method="POST">
  @csrf
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="border: solid #c5c7c9 1px;"> 
          <h4>ORDER</h4>
          <div class="form-row">
            <label for="">Name</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="" name="name" value="{{Auth::guard('cus')->user()->name}}">
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Street address" name="address" value="{{Auth::guard('cus')->user()->address}}">
          </div>                        
          <div class="form-row">
              <div class="form-group col-md-6" style="">
                <label for="">Phone</label>
                <input type="" class="form-control" id="inputEmail4" placeholder="" style="height: 40px; width: 100%;" name="phone" value="{{Auth::guard('cus')->user()->phone}}">
              </div>
              <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="email" class="form-control" id="inputPassword4" placeholder="" style="height: 40px; width: 100%;" name="email" value="{{Auth::guard('cus')->user()->email}}">
              </div>
          </div>
          <p>Order Note (optional)</p>
          <div class="form-group">
            <input type="text" class="form-control" id="inputAddress2" placeholder="" style="height: 140px;" name="note">
          </div> 
           
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="border: solid #c5c7c9 1px;left: 10px">
            <h4 style="text-align: center;">YOUR ORDER</h4>
              <hr>
            @if(session('cart') != null)
            <p><b>Products</b></p>
            @foreach($cart->items as $item)
            <p>{{$item['name']}}  <span style="float: right;">{{$item['price']}} k</span></p>
            <p><b>Quantity</b><span style="float: right;">{{ $item['quantity'] }}</span></p>
            @endforeach
              <hr>

            <p><b>Subtotal:</b><span style="float: right;">{{$cart->total_price}} k</span>
                <hr>
                <p><b>Shipping cost :</b> <span style="float: right;">30k</span></p>
                <hr>
                <p><b>Total :</b> <span style="float: right">{{($cart->total_price)+30}} k</span></p>
                <hr>
            @endif
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="border: solid #c5c7c9 1px; left:10px;margin-top: 10px;">
          <legend>Payment Method</legend> 
         
          <div class="form-group">
             @foreach($payment as $value)
            <input type="radio" name="payment" value="{{ $value->name}}" checked="checked">
            <label >{{ $value->name }}</label>
            <div class="method" style="display: block">
              {{ $value->content }}
            </div>
             @endforeach()
          </div>
          <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;font-size: 15px;">PLACE ORDER</button>
      </div>          
    </div>
  </div>

</form>
@stop()
@section('script') 
@if(Session::has('success'))
<script>
  Command: toastr["success"]("Đặt hàng thành công")
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "rtl": false,
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
@stop()