@extends('Layouts.Admin')
@section('title')
	Notice List
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
	<form action="{{route('admin.noticeDelete')}}" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('admin.noticeForm')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button type="submit" onclick="alert('Are You Sure!!')" data-toggle="tooltip" title="" class="btn btn-danger"><a href="{{route('admin.noticeDelete')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>Notice Information</h1>
		      <ul class="breadcrumb">
		      </ul>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i> Notice List</h3>
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
			                  	<a href="">Notice Title</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Notice Description</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Notice Date</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Image</a>
			                  </td><td class="text-left">
			                  	<a href="">Attachment</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Action</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@forelse($notices as $notice)
			            	<tr>
			                  <td class="text-center">
			                  	<input type="checkbox" name="selected[]" value="{{$notice->id}}">
			                  </td>
			                  <td class="text-left">{{$notice->title}}</td>
			                  <td class="text-left">{{$notice->description}}</td>
			                  <td class="text-left">{{$notice->noticedate}}</td>
			                  <td class="text-left">
			                  	@if($notice->image)
			                  		<img src="{{asset('images')}}/{{$notice->image}}" height="180px;" width="auto">
		                  	 	@endif
			                  </td><td class="text-left">
			                  	@if($notice->attachment)
			                  		<a href="{{route('admin.downFile',$notice->attachment)}}" class="btn btn-primary">Download</a>
		                  	 	@endif
			                  </td>
			                  <td class="text-right"><a href="{{route('admin.editNotice',$notice->id)}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
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