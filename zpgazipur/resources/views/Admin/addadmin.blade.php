@extends('Layouts.Admin')
@section('title')
	Add Admin
@endsection
@section('script')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>  
  <script>
    $(document).ready(function() {
        $('.summernote').summernote({
          height:400,
        });
    });
</script>
@endsection
@section('container')
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" href=""  form="form-user" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Save"><i class="fa fa-save"></i></button>
        <a href="{{route('admin.adminList')}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
      <h1>Admin Add</h1>
      <ul class="breadcrumb">
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> </h3>
      </div>
      <div class="panel-body">
        <form action="" method="post" enctype="multipart/form-data" id="form-user" class="form-horizontal">
          {{csrf_field()}}
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" placeholder="Name" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Email</label>
            <div class="col-sm-10">
              <input type="text" name="email" placeholder="Email" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Address</label>
            <div class="col-sm-10">
              <input type="text" name="address" placeholder="address" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" name="number" placeholder="Phone Number" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" placeholder="Password" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" name="confirm_password" placeholder="Confirm Password" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
      	</form>
        @if($errors->any())
          <ul>
            @foreach($errors->all() as $error)
              <li style="color: red;">{{$error}}</li>
            @endforeach
          </ul>
        @endif
        @if(session('message'))
          <div class="alert alert-success col-5">
            {{session('message')}}
          </div>
        @endif
  	  </div>  
    </div>
  </div>
</div>
@endsection