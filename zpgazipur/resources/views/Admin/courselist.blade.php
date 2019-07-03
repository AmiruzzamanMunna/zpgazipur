@extends('Layouts.Admin')
@section('title')
	Course List
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
	<form action="{{route('admin.courseFilter')}}" enctype="multipart/form-data" id="form-user">
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('admin.courseAdd')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button data-toggle="tooltip" title="" class="btn btn-danger"><a href="{{route('admin.courseDelete')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>Course Information</h1>
		      <ul class="breadcrumb">
		      </ul>
		      	<form class="form-inline" enctype="multipart/form-data">
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
			                  	<input type="checkbox" name="selected[]" value="{{$course->id}}">
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
    </form>
</div>
<script type="text/javascript">

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
    });
    $(".ajax").click(function(e){

        e.preventDefault();

        var name = $("input[name=status_year]").val();
        $.ajax({

           type:'GET',

           url:'/admin/coursefilter',

           data:{name:name},

           success:function(data){

              alert(data.success);

           }

        });

  

	});

</script>
@endsection