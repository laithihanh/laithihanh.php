@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
        <section class="content" ng-app="role"ng-controller="roleController">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
              <form action="{{route('admin.role.update',$model->id)}}" method="POST" role="form">
                @method('PUT')
                @csrf
                <legend>Sửa nhóm quyền</legend>
              
                <div class="form-group">
                  <label for="">Tên nhóm quyền</label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name"value="{{ $model->name }}">
                </div>
                 @if($errors->has('name'))
                <div class="helper" >
                  <span>{{$errors->first('name')}}</span>
                </div>
                @endif
                <div class="form-group" style="height: 300px;overflow-y:auto">
                  <input type="text" class="form-control" ng-model="rname" placeholder="Input route name">
                  <label for="">Routes</label>
                    <div class="checkbox" ng-repeat="r in roles |filter:rname">
                      <label>
                        <input type="checkbox" ng-checked="set_cheked(r)"ng-model="role" class="role-item "name="route[]" id="inputStatus" value="@{{r}}" >
                        @{{r}}
                      </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <label><input type="checkbox" id="check-all">Check All</label>
              </form>
            </div>
          </div>
    </section>
  </div>
  </div>
@stop()
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.min.js"></script>
<script style="text/javascript">
  var app = angular.module('role',[]);
  app.controller('roleController',function($scope){
    var roles = '<?php echo json_encode($routes) ;?>';
    var permissions = '<?php echo json_encode($permissions) ;?>';
    $scope.roles = angular.fromJson(roles);
    $scope.role = angular.fromJson(permissions);

    $scope.set_cheked = function(r){
      console.log(r);
      for(var i = 0;i < $scope.role.length; i++){
        if($scope.role[i] == r){
          return true;
        }
      }
      return false;
    }
  });
  // jquery check all
  $('#check-all').click(function(){
    $('.role-item').not(this).prop('checked',this.checked);
  });
</script>
@stop()
