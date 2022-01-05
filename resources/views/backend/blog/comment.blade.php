@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row"> <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Danh sách bình luận</div>
            <div class="panel-body">
             <div class="col-md-8">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{Session::get('success')}}</strong> 
                    </div>
                    @endif
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Stt </th>
                              <th>Tên</th>
                              <th> Id tin tức</th>
                              <th>Nội dung</th>
                              <th>Ngày</th>
                            </tr>
                          </thead>
                           <tbody>
                            <?php $k=1; ?>
                            @foreach($comments as $value)
                              <tr>  
                                <td>{{$k}}</td>
                                <td>{{$value->cus->name}}</td>
                                <td>{{$value->comsment->blog_id}}</td>
                                <td>{{$value->content}}</td>
                                <td>{{$value->created_at}}</td>
                              </tr>
                               <?php $k++ ?>
                             @endforeach()
                            </tbody>
                        </table>
                      </div>
                      <div class="container" style="margin-left: 550px">
                          
                      </div>
                  </div>
            </div>
            
          </div>

          </div>
          
  
        <!-- right col -->

      <!-- /.row (main row) -->

    </section>

    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@stop()

</script>
