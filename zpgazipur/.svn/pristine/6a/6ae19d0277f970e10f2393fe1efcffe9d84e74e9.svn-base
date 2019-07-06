@extends('Layouts.Admin')
@section('title')
	View Designation
@endsection
@section('container')
<div id="content">
	<div class="row">
      	@if(session('message'))
          <div class="alert alert-success col-3" style="margin-left: 14px;">
            {{session('message')}}
          </div>
        @endif
    </div>
	<form action="" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('admin.addDesignation')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger"><a href="{{route('admin.noticeDelete')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>Designation Information</h1>
		      <ul class="breadcrumb">
		      </ul>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i>Designation List</h3>
			      </div>
			      <div class="panel-body">
			          <div class="table-responsive">
			            <table class="table table-bordered table-hover">
			              <thead>
			                <tr>
			                  <td style="width: 1px;" class="text-center">
			                  	<input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" />
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Heading</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Image</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Action</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@forelse($desgs as $desg)
			            	<tr>
			                  <td class="text-center">
			                  	<input type="checkbox" name="selected[]" value="{{$desg->id}}">
			                  </td>
			                  <td class="text-left">{{$desg->heading}}</td>
			                  <td class="text-left">{{$desg->name}}</td>
			                  <td class="text-left"><img src="{{asset('images/catalog/Users')}}/{{$desg->image}}" id="desgimg"></td>
			                  <td class="text-right"><a href="{{route('admin.editDesignation',[$desg->id])}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
			                </tr>
			                @empty
			                @endforelse
			              </tbody>
			            </table>
			          </div>
			      </div>
			 	</div>
      		</div>
      	</div>
    </form>
    
</div>
@endsection