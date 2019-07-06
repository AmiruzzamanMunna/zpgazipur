@extends('Layouts.Admin')
@section('title')
	All List
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
	<form action="{{route('admin.postDelete')}}" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('admin.allPostAdd')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button data-toggle="tooltip" onclick="alert('Are You Sure!!')" title="" class="btn btn-danger"><a href="{{route('admin.postDelete')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>All Post Information</h1>
		      <ul class="breadcrumb">
		      </ul>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i>ALl Post List</h3>
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
			                  	<a href="">Description</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Image</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Image 2</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Action</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@forelse($posts as $post)
			            	<tr>
			                  <td class="text-center">
			                  	<input type="checkbox" name="selected[]" value="{{$post->id}}">
			                  </td>
			                  <td class="text-left">{!!$post->description!!}</td>
			                  <td class="text-left">
			                  	@if($post->image)
			                  	<img src="{{asset('images')}}/{{$post->image}}" style="height: 130px;width: auto;">
			                  	 @endif
			                  </td>
			                  <td class="text-left">
			                  	@if($post->image2)
			                  	<img src="{{asset('images')}}/{{$post->image2}}" style="height: 130px;width: auto;">
			                  	 @endif
			                  </td>
			                  <td class="text-right"><a href="{{route('admin.postEdit',[$post->id])}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
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