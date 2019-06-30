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
	<form action="{{route('application.testSend')}}" method="post" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('stuff.addStuff')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger"><a href=""><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>Application's Details Information</h1>
		      <ul class="breadcrumb">
		      </ul>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i>Application's Details List</h3>
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
			                  	<a href="">Application Category</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applicant's Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applicant's Address</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applicant's Phone</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Received Date</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">File Received By</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applicant Token Number</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@forelse($applists as $applist)
			            	<tr>
			                  <td class="text-center">
			                  	<input type="checkbox" name="selected[]" value="">
			                  </td>
			                  <td class="text-left">{{$applist->reference_id}}</td>
			                  <td class="text-left">{{$applist->application_category_name}}</td>
			                  <td class="text-left">{{$applist->applicationname}}</td>
			                  <td class="text-left">{{$applist->applicationaddress}}</td>
			                  <td class="text-left">{{$applist->applicationnumber}}</td>
			                  <td class="text-left">{{$applist->receiveddate}}</td>
			                  <td class="text-left">{{$applist->name}}</td>
			                  <td class="text-left">{{$applist->token_id}}</td>
			                </tr>
			                @break
			                @empty
			                 <h1 style="color: red;">Sorry No Data is Available !!</h1>
			                @endforelse
			              </tbody>
			            </table>
			            <table class="table table-bordered table-hover">
			              <thead>
			                <tr>
			                  <td style="width: 1px;" class="text-center">
			                  	<input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" />
			                  </td>
			                  <td class="text-left">
			                  	<a href="">File</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@forelse($applists as $applist)
			            	<tr>
			                  <td class="text-center">
			                  	<input type="checkbox" name="selected[]" value="">
			                  </td>
			                  <td class="text-right">
			                  	<a href="{{route('admin.downFile',$applist->attachment)}}" class="btn btn-primary">Download</a>
			                  </td>
			                </tr>
			                @empty
			                 <h1 style="color: red;">Sorry No Data is Available !!</h1>
			                @endforelse
			              </tbody>
			            </table>
			          </div>
			          <button type="submit" class="btn btn-primary">Send</button>
			      </div>
			 	</div>
      		</div>
      	</div>
    </form> 
</div>
@endsection