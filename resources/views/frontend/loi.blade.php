@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6" style="margin-top: 150px;">
            <h1>OPPS! Page Not Found</h1>
            <p>we.re sory but we can't seem to find the pages request. <br> This might because you have typed the web address not <br> find incorrectly</p>
            <button type="submit" class="btn btn-danger">Back to home</button>
        </div> 
        <br>
        <br>
        <br>
        <div class="col-md-6">
          <img src="{{url('public')}}/assets/images/icon/error.jpg" class="img-responsive" alt="Image">
        </div>
    </div>
</div>
@stop()