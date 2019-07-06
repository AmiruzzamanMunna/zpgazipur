@extends('Layouts.Admin')
@section('title')
 Admin List
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
		      <div class="pull-right"><a href="{{route('admin.addAdmin')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger"><a href="{{route('admin.noticeDelete')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>All User Information</h1>
		      <ul class="breadcrumb">
		      </ul>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i> User's List</h3>
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
				                  	<a href="">User Name</a>
				                  </td>
				                  <td class="text-left">
				                  	<a href="">User Email</a>
				                  </td>
				                  <td class="text-left">
				                  	<a href="">User Address</a>
				                  </td>
				                  <td class="text-left">
				                  	<a href="">User Phone Number</a>
				                  </td>
				                  <td class="text-left">
				                  	<a href="">Action</a>
				                  </td>
				                </tr>
				              </thead>
				              <tbody>
				              	@forelse($admins as $admin)
				            	<tr>
				                  <td class="text-center">
				                  	<input type="checkbox" name="selected[]" value="{{$admin->id}}">
				                  </td>
				                  <td class="text-left">{{$admin->name}}</td>
				                  <td class="text-left">{{$admin->email}}</td>
				                  <td class="text-left">{{$admin->address}}</td>
				                  <td class="text-left">{{$admin->number}}</td>
				                  <td class="text-right"><a href="{{route('admin.editAdmin',$admin->id)}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
				                </tr>
				                @empty
				                	<h1 style="color: red;">Sorry No Data is Available !!</h1>
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