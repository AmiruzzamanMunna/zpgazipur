@extends('Layouts.Admin')
@section('title')
	Update Employee Form
@endsection
@section('container')
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" href=""  form="form-user" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Save"><i class="fa fa-save"></i></button>
        <a href="{{route('stuff.stuffList')}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
      <h1>Update Employee Form</h1>
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
          @foreach($employees as $post)
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Post Name</label>
            <div class="form-group row">
              <div class="col-md-8">
                <select class="form-control" name="post_name_id">
                  <option value="{{$post->post_name_id}}">{{$post->post_name_id}}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="name">Employee Name:</label>
            <div class="col-sm-10">
              <input type="text" value="{{$post->name}}" name="name" placeholder="Employee Name" id="input-username" class="form-control">
            	<div class="text-danger"></div>
          	</div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="number">Mobile Number:</label>
            <div class="col-sm-10">
              <input type="text" value="{{$post->number}}" name="number" placeholder="Mobile Number" id="input-username" class="form-control">
            	<div class="text-danger"></div>
          	</div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="joiningdate">Joining Date fo Employee:</label>
            <div class="col-sm-10">
              <input type="date" value="{{$post->joiningdate}}" name="joiningdate" placeholder="Date of Joining" id="input-username" class="form-control">
                <div class="text-danger"></div>
          	</div>
          </div>
          @endforeach
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