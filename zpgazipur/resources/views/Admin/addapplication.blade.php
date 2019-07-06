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
        <a href="{{route('application.applicationList')}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
      <h1>Application Form</h1>
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
            <label class="col-sm-2 control-label" for="input-username">Applicant Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" placeholder="Applicant Name" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error row">
            <label class="col-sm-2 control-label" for="input-username">Applicant Address</label>
            <div class="col-sm-10">
              <input type="text" name="address" placeholder="Applicant Address" id="input-username" class="form-control">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error row">
            <label class="col-sm-2 control-label" for="input-username">Applicant Phone</label>
            <div class="col-sm-10">
              <input type="text" name="number" placeholder="Applicant's Phone" id="input-username" class="form-control">
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
          <div class="form-group required has-error" id="dynamic">
            <label class="col-sm-2 control-label" for="input-username">Attachment</label>
            <div class="col-sm-10">
              <input type="file" name="attachment[]" placeholder="Notice Title" id="input-username" class="form-control">
              <div class="text-danger"></div>
              <!-- <button class="btn btn-danger">Remove</button> -->
            </div>
          </div>
          <button type="button" id="add" name="add" class="btn btn-primary imageadd">Add</button>
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
<script type="text/javascript">
  $(document).ready(function(){
    var i=1;
    $('#add').click(function() {
      i++;
    $('#dynamic').append('<div class="form-group required has-error" id="dynamic'+i+'"><label class="col-sm-2 control-label" for="input-username">Attachment</label><div class="col-sm-10"><input type="file" name="attachment[]" placeholder="Notice Title" id="input-username" class="form-control"><br><div class="text-danger"></div></div><br><div class="col-md-6 ml-auto"><button type="button" id="'+i+'" name="remove" class="btn btn-danger remove">Remove</button></div></div>');
    });
    $(document).on('click','.remove',function(){
      var id=$(this).attr('id');
      $('#dynamic'+id+'').remove();
    });
  });
</script>
@endsection