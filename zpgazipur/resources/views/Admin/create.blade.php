@extends('Layouts.Admin')
@section('title')
	All Creating Form
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
        <a href="{{route('admin.allPostList')}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
      <h1>All Post Form</h1>
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
            <label class="col-sm-2 control-label" for="input-username">Menu</label>
            <div class="form-group row">
              <div class="col-md-8">
                <select class="form-control" name="menu">
                  <option>Select---</option>
                  @foreach($menus as $menu)
                  <option value="{{$menu->id}}">{{$menu->menu_title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Sub Menu</label>
            <div class="form-group row">
              <div class="col-md-8">
                <select class="form-control" name="submenu">
                  <option>Select---</option>
                  @foreach($submenus as $submenu)
                  <option value="{{$submenu->id}}">{{$submenu->submenu_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Attachment Title</label>
              <input type="text" name="attachment_title" id="input-username" class="col-md-8">
              <div class="text-danger"></div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Attachment</label>
              <input type="file" name="attachment" >
              <div class="text-danger"></div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Image</label>
              <input type="file" name="image" class="col-sm-1">
              <label class="col-sm-1 control-label" for="input-username">Height</label>
              <input type="text" name="length" class="col-md-2" placeholder="for image">
              <label class="col-sm-1 control-label" for="input-username">Width</label>
              <input type="text" name="width" class="col-md-2" placeholder="for image">
              <div class="text-danger"></div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username" id="description">Description</label><br><br><br>
              <textarea class="summernote" rows="50" cols="50" name="description"></textarea>
            	<div class="text-danger"></div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 control-label" for="input-username">Image 1</label>
              <input type="file" name="image1">
              <div class="text-danger"></div>
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