@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
      @foreach($product as $value)
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="thumbnail">           
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="hover04 column">
                          <div>
                            <figure class="f"><img src="{{url('uploads')}}/{{$value->images}}"  style="width:100%  ; "class="img-responsive"></figure>
                          </div>
                        </div>   
                        <ul>
                          <li class=""><a href="{{route('single',$value->product_id)}}" class="fas fa-search"></a></li>
                          <li class=""><a href="#" class="fas fa-shopping-cart"></a></li>
                          <li class=""><a href="#"class="far fa-heart" ></a></li>
                        </ul>
                    </div>
                </div>
                <div class="caption" >
                    <span class="rating" data-id="154277"> 
                      <a href="#" class="fa-star fa"></a>
                      <a href="#" class="fa-star fa"></a>
                      <a href="#" class="fa-star fa"></a>
                      <a href="#" class="fa fa-star"></a>
                      <a href="#" class="fa-star-o fa"></a> 
                    </span>
                    <h3>{{$value->name}}</h3>
                    <div class="product-info__price">
                         @if($value->sale_price==0)
                        <span class=" gia">{{$value->price}}k</span>
                        @else      
                        <span class=" gia">{{$value->sale_price}}k</span>
                        <span class="old " style="text-decoration: line-through;">{{$value->price}}k</span>
                        @endif
                    </div>
                </div>
            </div>
        </div> 
      @endforeach()
    </div>
</div>
@stop()