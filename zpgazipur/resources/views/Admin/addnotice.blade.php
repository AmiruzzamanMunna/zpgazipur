@extends('Layouts.Admin')
@section('title')
	Notice Form
@endsection
@section('container')
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" href=""  form="form-user" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Save"><i class="fa fa-save"></i></button>
        <a href="{{route('admin.noticeList')}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
      <h1>Notice Form</h1>
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
            <label class="col-sm-2 control-label" for="input-username">Notice Title</label>
            <div class="col-sm-10">
              <input type="text" name="noticetitle" placeholder="Notice Title" id="input-username" class="form-control">
            	<div class="text-danger"></div>
          	</div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Notice Description</label>
            <div class="col-sm-10">
              <input type="text" name="noticedescription" placeholder="Notice Description" id="input-username" class="form-control">
            	<div class="text-danger"></div>
          	</div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Notice Date</label>
            <div class="col-sm-10">
              <input type="date" name="startdate" placeholder="Notice Date" id="input-username" class="form-control">
            	<div class="text-danger"></div>
          	</div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Image</label>
            <div class="col-sm-10">
              <input type="file" name="image" placeholder="image" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Attachment</label>
            <div class="col-sm-10">
              <input type="file" name="attachment" placeholder="Insert Only Pdf File" id="input-username" class="form-control">
            	<div class="text-danger"></div>
          	</div>
          </div>
      	</form>
        @if($errors->any())
          <ul>
            @foreach($errors->all() as $error)
              <li style="color: red">{{$error}}</li>
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