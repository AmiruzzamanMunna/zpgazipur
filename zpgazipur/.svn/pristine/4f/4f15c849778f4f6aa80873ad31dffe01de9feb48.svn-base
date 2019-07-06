@extends('Layouts.Admin')
@section('title')
	Gallary List
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
	<form action="{{route('admin.gallaryImageDelete')}}" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('admin.addgallary')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button data-toggle="tooltip" onclick="alert('Are You Sure!!')" title="" class="btn btn-danger"><a href="{{route('admin.imageDelete')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>All Image </h1>
		      <ul class="breadcrumb">
		      </ul>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i>Gallary Image List</h3>
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
			                  	<a href="">Image</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@forelse($images as $image)
			            	<tr>
			                  <td class="text-center">
			                  	<input type="checkbox" name="selected[]" value="{{$image->id}}">
			                  </td>
			                  <td class="text-left">
			                  	@if($image->name)
			                  	<img src="{{asset('images/gallary')}}/{{$image->name}}" style="height: 130px;width: auto;">
			                  	 @endif
			                  </td>
			                  <!-- <td class="text-right"><a href="{{route('admin.postEdit',[$image->id])}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td> -->
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