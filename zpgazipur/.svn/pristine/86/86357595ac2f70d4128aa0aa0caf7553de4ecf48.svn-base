@extends('Layouts.Admin')
@section('title')
  Application Form
@endsection
@section('container')
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" href=""  form="form-user" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Save"><i class="fa fa-save"></i></button>
        <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
      <h1>APplication Form</h1>
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
          <div class="form-group required has-error row">
            <label class="col-sm-2 control-label" for="input-username">Reference By</label>
            <div class="col-sm-10">
              <select name="reference_id" id="input-username" class="form-control">
                <option value="">Select</option>
                @foreach($references as $reference )
                <option value="{{$reference->name}}">{{$reference->name}}</option>
                @endforeach
              </select>
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error row">
            <label class="col-sm-2 control-label" for="input-username">Application Category</label>
            <div class="col-sm-10">
              <select name="application_category_name" id="input-username" class="form-control">
                <option value="">Select</option>
                @foreach($catagories as $cat)
                <option value="{{$cat->name}}">{{$cat->name}}</option>
                @endforeach
              </select>
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error row">
            <label class="col-sm-2 control-label" for="input-username">Received Date</label>
            <div class="col-sm-10">
              <input type="date" name="receiveddate" placeholder="Application Received Date" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error row">
            <label class="col-sm-2 control-label" for="input-username">File Received By</label>
            <div class="col-sm-10">
              <select name="stuff_id" id="input-username" class="form-control">
                <option value="">Select</option>
                @foreach($desigs as $desig)
                <option value="{{$desig->name}}">{{$desig->name}}</option>
                @endforeach
              </select>
              <div class="text-danger"></div>
            </div>
          </div>
        </form>
        @if($errors->any())
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
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