
	@if($order)
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>Stt</th>
	      <th>Tên khác hàng</th>
	      <th>Địa chỉ</th>
	      <th>Số điện thoại</th>
	      <th>Tổng tiền</th>
	      <th>Ngày đặt</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php $k=1; ?>
	    @foreach($order as $value)
	    <tr>
	      <td>{{$k}}</td>
	      <td>{{$value->cus->name}}</td>
	      <td>{{$value->cus->address}}k</td>
	      <td>{{$value->cus->phone}}</td> 
	      <td>{{$value->total_amount}}k</td>
	      <td>{{$value->created_at}}</td>
	    </tr>
	    <?php $k++ ?>
	    @endforeach
	  </tbody>
	</table>
	@endif
	@if($orders)
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>Stt</th>
	      <th>Tên sản phẩm</th>
	      <th>Ảnh</th>
	      <th>Giá</th>
	      <th>Màu</th>
	      <th>Size</th>
	      <th>Số lượng</th>
	      <th>Tổng tiền</th>
	      <th>Thao tác</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php $k=1; ?>
	    @foreach($orders as $value)
	    <tr>
	      <td>{{$k}}</td>
	      <td>{{$value->product->name}}</td>
	      <td><img src="{{url('uploads')}}/{{ $value->product->images }}" alt="" style="width:50px;height: 50px"></td>
	      <td>{{($value->price)}}k</td>
	      <td>{{$value->attr_color->nameColor}}</td>
	      <td>{{$value->attr_size->name}}</td>
	      <td>{{$value->quantity}}</td>
	      <td>{{$value->price * $value->quantity }}k</td>  
	      <td>
			<a href="{{route('admin.xoa',['id'=>$value->orderDetail_id])}}"onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-xs btn-danger">Xóa</a>
		  </td>
	    </tr>
	    <?php $k++ ?>
	    @endforeach
	  </tbody>
	</table>
@endif


