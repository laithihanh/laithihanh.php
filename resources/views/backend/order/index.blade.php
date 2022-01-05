@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Danh sách đơn hàng</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-12">
                    @if(Session::has('success'))
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{Session::get('success')}}</strong> 
                    </div>
                    @endif
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Tổng tiền</th>
                              <th>Phương thức thanh toán</th>
                              <th>Ngày đặt</th>
                              <th>Trạng thái</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $k=1; ?>
                            @foreach($order as $value)
                            <tr>
                              <td>{{$k}}</td>
                              <td>{{$value->cus->name}}</td>
                               <td>{{$value->cus->email}}</td>
                               <td>{{$value->cus->phone}}</td>
                               <td>{{$value->cus->address}}</td>
                               <td>{{($value->total_amount)}}k</td>
                               <td>{{$value->payment}}</td>
                               <td>{{$value->created_at }}</td>
                               <td>
                                  @if($value->status == 0)
                                      <a href=""class="label-success label">Đã xử lý</a>
                                  @else
                                      <a href="" class="label label-default">Chờ xử lý</a>
                                  @endif
                               </td>
                              <td>
                                <form action="{{route('admin.order.destroy',$value->order_id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                                </form>
                              </td>
                              <td>
                                <a href="{{route('admin.viewOrder',['id'=>$value->order_id])}}" class="glyphicon glyphicon-eye-open js_order_item" style="color:black"data-id="{{$value->order_id}}"></a>
                              </td>
                            </tr>
                            <?php $k++ ?>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                      
                  </div>
                  <div id="myModalOrder" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Chi tiết đơn hàng có id = <b class="order_id"></b></h4>
                        </div>
                        <div class="modal-body" id="md_content">
                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="container" style="margin-left: 550px">
                  {!!$order->links()!!}
              </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop()
@section('script')
<script>
  $(function(){
   $(".js_order_item").click(function(event){
      event.preventDefault();
      let $this = $(this);
      let url = $this.attr('href');
      $(".order_id").text('').text($this.attr('data-id'));
      $("#myModalOrder").modal('show');
      $.ajax({
        url: url,
      }).done(function(result){
        console.log(result);
        if(result){
          $("#md_content").html('').append(result);
        }
      });
      // console.log(url);
   });
  });
</script>
@endsection()
  