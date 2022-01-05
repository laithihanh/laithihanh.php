@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid khoangcach" style="margin-top: -20px;">
  <div class="row">
    <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
      <div class="container">
        <h1 class="text-light">CART PAGES</h1>
        <div class="sep-sm bg-light chu"></div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb text-light">
            <li  class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Cart pages</a></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>	
</div>
<section>
<div class="container">
		<div class="row">
      <div class="table-responsive">
          @if(Session::has('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('success')}}</strong> 
          </div>
          @endif
      <table  class="table table-hover">
        <thead>
          <tr >
            <th>Stt</th>
            <th>Product</th>
            <th >Price</th>
            <th >Quantity</th>
            <th >Total</th>
            <th ></th>
          </tr>
        </thead>
          <tbody >
            @if(session('cart') != null)
            <?php $k =1; ?>
            @foreach($cart->items as $item)
            <tr >
              <td>{{$k}}</td>
              <td >
                <img src="{{url('uploads')}}/{{$item['images']}}" style="height: 100px"alt="">
                <p class="my-1 text-dark">{{$item['name']}}</p>
              </td>

              <td >
               {{$item['price']}}k
             </td>
             <td>
               <form action="{{route('update',['id'=>$item['product_id'],'color_id'=>$item['color_id'],'size_id'=>$item['size_id']])}}" method="get" role="form">
                <input class="form-input input-sm stepper-input" name="quantity" type="number" data-zeros="true" value="{{$item['quantity']}}" min="1" max="20" >
                <input class="form-input input-sm stepper-input" name="color_id" type="number" data-zeros="true" value="{{$item['color_id']}}" min="1" max="20" hidden>
                <input class="form-input input-sm stepper-input" name="size_id" type="number" data-zeros="true" value="{{$item['size_id']}}" min="1" max="20"hidden >
                <button type="submit" class="label-default label">Update</button>
              </form>
            </td>
            <td >
              {{$t = $item['price']*$item['quantity']}}k
            </td>
            <td>
              <a href="{{route('remove',['id'=>$item['product_id'],'color_id'=>$item['color_id'],'size_id'=>$item['size_id']])}}"class="btn btn-danger" style="font-size: 15px">Delete</a>
            </td>
          </tr>
          <?php $k++ ?>
          @endforeach()
          @endif
          </tbody>
      </table>
      </div>
    </div>
</div>
<div class="container">	
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"style="padding: 10px; text-align: center;">
        <a class="btn btn-width-160 btn-danger" href="{{route('clear')}}" style="font-size: 15px">CLEAR SHOPPING CART</a>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"style="padding: 10px; text-align: center;">
        <a class="btn btn-width-160 btn-danger" href="{{route('home')}}" style="font-size: 15px">CONTINUE SHOPPING</a>
      </div>
    </div>
</div>
<div class="container" id="total">
    <div class="row">
      <div class="col-md-6">
        <table  id="table"class="table table-custom-md table-primary table-bordered-custom text-left">
          <tbody>
            <tr class="bg-gray-lighter">
              <th class="font-weight-bold text-gray">Cart Totals</th>
              <th></th>
            </tr>
            <tr>
              <td>Subtotal</td>
              <td class="text-gray">{{$cart->total_price}}k</td>
            </tr>
            <tr>
              <td>Total</td>
              <td class="font-weight-bold text-gray">{{$cart->total_price}}k</td>
            </tr>
          </tbody>  
        </table>
        @if(Auth::guard('cus')->check())
        <a class="btn btn-block btn-primary offset-top-13" href="{{route('checkout')}}" >Proceed to checkout</a>
        @else
        <a class="btn btn-block btn-primary offset-top-13" href="{{route('getlogin')}}" >Proceed to checkout</a>
        @endif
      </div>
    </div>
</div>	
</section>
@stop()