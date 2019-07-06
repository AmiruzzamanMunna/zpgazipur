@extends('Layouts.Admin')
@section('title')
	Application List
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
	<form action="{{route('application.fileSend')}}" method="post" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <!-- <div class="pull-right"><a href="{{route('stuff.addStuff')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-save"></i></a>
		      </div> -->
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
				  		<div class="col-md-6">
				  			@foreach($applists as $applist)
				  			<input type="hidden" name="applicationid" value="{{$applist->invoice_id}}">
				  			<div class="form-group required has-error row">
					            <label class="col-sm-4 control-label" for="input-username">Reference By</label>
					            <div class="col-sm-6">
					              <input type="text" name="address" placeholder="Application Address" id="input-username" class="form-control" value="{{$applist->reference_id}}">
					              <div class="text-danger"></div>
					            </div>
				          	</div>
				          	<div class="form-group required has-error row">
					            <label class="col-sm-4 control-label" for="input-username">Application Category</label>
					            <div class="col-sm-6">
					              <input type="text" name="address" placeholder="Application Address" id="input-username" class="form-control" value="{{$applist->application_category_name}}">
					              <div class="text-danger"></div>
					            </div>
				          	</div>
				          	<div class="form-group required has-error row">
					            <label class="col-sm-4 control-label" for="input-username">Applicant Name</label>
					            <div class="col-sm-6">
					              <input type="text" name="name" placeholder="Application Name" id="input-username" class="form-control" value="{{$applist->applicationname}}">
					              <div class="text-danger"></div>
					            </div>
				          	</div>
				  		</div>
				  		<div class="col-md-5">
				          	<div class="form-group required has-error row">
					            <label class="col-sm-4 control-label" for="input-username">Applicant Address</label>
					            <div class="col-sm-6">
					              <input type="text" name="address" placeholder="Application Address" id="input-username" class="form-control" value="{{$applist->applicationaddress}}">
					              <div class="text-danger"></div>
					            </div>
				          	</div>
				          	<div class="form-group required has-error row">
					            <label class="col-sm-4 control-label" for="input-username">Applicant Phone</label>
					            <div class="col-sm-6">
					              <input type="text" name="number" placeholder="Application Address" id="input-username" class="form-control" value="{{$applist->applicationnumber}}">
					              <div class="text-danger"></div>
					            </div>
				          	</div>
			          		<div class="form-group required has-error row">
					            <label class="col-sm-4 control-label" for="input-username">Received Date</label>
					            <div class="col-sm-6">
					              <input type="text" name="receiveddate" placeholder="Application Received Date" id="input-username" class="form-control" value="{{$applist->receiveddate}}">
					              <div class="text-danger"></div>
					            </div>
				          	</div>
				          	@break
				          	@endforeach
				  		</div>
				  		<div class="container">
					  		<div class="col-sm-6">
						  		<table class="table table-bordered table-hover center">
					              	<thead>
						                <tr>
						                  <td style="width: 1px;" class="text-center">
						                  	<input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" />
						                  </td>
						                  <td class="text-center">
						                  	<a href="">File</a>
						                  </td>
						                </tr>
					              	</thead>
					              	<tbody>
						            	@foreach($applists as $applist)
							            	<tr>
							                  <td class="text-center">
							                  	<input type="checkbox" name="selected[]" value="">
							                  </td>
							                  <td class="text-right">
							                  	<a href="{{route('admin.downFile',$applist->attachment)}}" class="btn btn-primary btn-block">Download</a>
							                  </td>
							                </tr>
					                	@endforeach
					              	</tbody>
					            </table>
					        </div>
					    </div>
				    	<div class="form-group required has-error row">
				            <label class="col-sm-2 control-label" for="input-username">Send To</label>
				            <div class="col-sm-5">
				              	<select name="reference_id" id="input-username" class="form-control">

					                <option value="">Select</option>
					                @foreach($desigs as $desig)
					                <option value="{{$desig->id}}">{{$desig->name}}</option>
					                @endforeach
				              	</select>
				              <div class="text-danger"></div>
				            </div>
				            <div class="col-sm-2">
				            	<button type="submit" class="btn btn-primary">Send</button>
				            </div>
			          	</div>
			      	</div>
			 	</div>
      		</div>
      	</div>
    </form> 
</div>
@endsection