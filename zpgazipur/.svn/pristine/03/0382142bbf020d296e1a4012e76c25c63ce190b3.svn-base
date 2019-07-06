@extends('Layouts.Admin')
@section('title')
	Application List
@endsection
@section('container')
<div id="content">
	<div class="row">
      	@if(session('message'))
          <div class="alert alert-success col-3">
            {{session('message')}}
          </div>
        @endif
    </div>
	<form action="{{route('application.deleteApplication')}}" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('application.addApplication')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button type="submit" onclick="alert('Are You Sure!!')" data-toggle="tooltip" title="" class="btn btn-danger"><a href="{{route('application.deleteApplication')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>Application List</h1>
		      <ul class="breadcrumb">
		      </ul>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i>Application List</h3>
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
			                  	<a href="">Reference By</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applicant's Name</a>
			                  </td><td class="text-left">
			                  	<a href="">Applicant's Address</a>
			                  </td><td class="text-left">
			                  	<a href="">Applicant's Phone</a>
			                  </td><td class="text-left">
			                  	<a href="">Application Category</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applicant Token Number</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Receive Date</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Status</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Action</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@forelse($applists as $applist)
			            	<tr>
			                  <td class="text-center"><input type="checkbox" name="selected[]" value="{{$applist->id}}"></td>
			                  <td class="text-left">{{$applist->reference_id}}</td>
			                  <td class="text-left">{{$applist->name}}</td>
			                  <td class="text-left">{{$applist->address}}</td>
			                  <td class="text-left">{{$applist->number}}</td>
			                  <td class="text-left">{{$applist->application_category_name}}</td>
			                  <td class="text-left">{{$applist->token_id}}</td>
			                  <td class="text-left">{{$applist->date}}</td>
			                  <td class="text-left">{{$applist->status_name}}</td>
			                  <td class="text-right"><a href="{{route('application.applicationDetails',[$applist->id])}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
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