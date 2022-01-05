@extends('backend.main')
@section('content')
  <!-- =============================================== -->
<?php 
  $code = isset($code) ? $code : 404 ;
  $title = isset($title) ? $title : 'Not Found' ;
  $message = isset($message) ? $message : 'Page not found' ;
?>
  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center;font-family: cursive;font-size: xx-large">
       {{$code}},{{ $title  }}
      </h1>
      <p>{{ $message }}...</p>
    </section>

    
  </div>
  <!-- /.content-wrapper -->
@stop()
 
  