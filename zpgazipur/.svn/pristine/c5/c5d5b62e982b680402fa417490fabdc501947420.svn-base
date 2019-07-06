@extends('Layouts.Admin')
@section('title')
	Course List
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
  	<div class="page-header">
	    <div class="container-fluid">
	      <div class="pull-right"><a href="{{route('admin.courseAdd')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
	        <button data-toggle="tooltip" title="" onclick="alert('Are You Sure!!')" class="btn btn-danger delete"><i class="fa fa-trash-o"></i>
	        </button>
	      </div>
	      <h1>Course Information</h1>
	      <ul class="breadcrumb">
	      </ul>
	      	<form action="{{route('admin.courseFilter')}}" enctype="multipart/form-data" id="form-user">
        		{{csrf_field()}}
        		<h3>Filter</h5>
        			<div class="form-group col-md-2">
	        			<label for="application_status">Course Year</label>
	        			<select id="application_status" class="form-control" name="status_year">
	        				<option value="0">Select--</option>
	        				@foreach($sessions as $session)
	        				<option value="{{$session->session_id}}">{{$session->session_name}}</option>
	        				@endforeach
	        			</select>
        			</div>
        			<br><br>
        			<button type="submit" class="btn btn-primary ajax">Submit</button>
        	</form>
	    </div>
	  	<div class="container-fluid">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h3 class="panel-title"><i class="fa fa-list"></i>Course List</h3>
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
		                  	<a href="">Course Name</a>
		                  </td>
		                  <td class="text-left">
		                  	<a href="">Course Year</a>
		                  </td>
		                  <td class="text-left">
		                  	<a href="">Action</a>
		                  </td>
		                </tr>
		              </thead>
		              <tbody>
		              	@forelse($courses as $course)
		            	<tr>
		                  <td class="text-center">
		                  	<input type="checkbox" class="checkbox" name="selected[]" data-id="{{$course->id}}">
		                  </td>
		                  <td class="text-left">{{$course->name}}</td>
		                  <td class="text-left">{{$course->session_name}}</td>
		                  <td class="text-right"><a href="{{route('admin.courseEdit',$course->id)}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
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
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$('.delete').click(function(){
			 var idsArr = [];  
            $(".checkbox:checked").each(function() {
                idsArr.push($(this).attr('data-id'));
            if(idsArr.length >0)  
            {  
                var strIds = idsArr.join(","); 
                $.ajax({
	                url: "{{route('admin.courseDelete')}}",
	                type: 'delete',
	               	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	                data: 'ids='+strIds,
	                success: function (data) {
	                    window.location.replace("{{route('admin.courselist')}}");	                },
	                error: function (data) {
	                    console.log(data.responseText);
	                }
       		 	});

            }else{
            	
            }

            });  
		});
	});
</script>
@endsection