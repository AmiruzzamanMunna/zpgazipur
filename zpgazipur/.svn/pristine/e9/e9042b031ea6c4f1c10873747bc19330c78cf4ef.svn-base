@extends('Layouts.Admin')
@section('title')
	Student Course List
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
	<form action="{{route('admin.filter')}}" enctype="multipart/form-data" id="form-user">
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <!-- <button type="" data-toggle="tooltip" title="" class="btn btn-danger"><a href=""><i class="fa fa-trash-o"></i></a>
		        </button> -->
		      </div>
		      <div style="text-align: center;">
		      	<h1>Student Course List Information</h1>
		      </div>
		      <ul class="breadcrumb">
		      </ul>
	      		<div class="">
		        	<form class="form-inline" action="">
		        		{{csrf_field()}}
		        		<h3>Filter</h5>
		        			<div class="form-group col-md-2">
			        			<label for="application_status">Application status</label>
			        			<select id="application_status" class="form-control" name="filter">
			        				<option value="0">Select--</option>
			        				@foreach($statuss as $status)
			        				<option>{{$status->name}}</option>
			        				@endforeach
			        			</select>
		        			</div>
		        			<div class="form-group col-md-2">
			        			<label for="course_name">Course Name</label>
			        			<select name="course" class="form-control">
			        				<option value="0">Select--</option>
			        				@foreach($courses as $course)
			        				<option>{{$course->name}}</option>
			        				@endforeach
			        			</select>
		        			</div>
		        			<div class="form-group col-md-2">
			        			<label for="applicant_name">Applicant Name</label>
			        			<input type="text" id="applicant_name" class="form-control" name="applicant_name" placeholder="Student Name">
		        			</div>
		        			<div class="form-group col-md-2">
			        			<label for="mobile">Mobile Number</label>
			        			<input type="text" id="mobile" class="form-control" name="mobile" placeholder="Phone Number">
		        			</div><br><br>
		        			<button type="submit" class="btn btn-primary" style="height: 32px; margin:05px;">Submit</button>
		        	</form>
		        </div>
		    </div>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h3 class="panel-title"><i class="fa fa-list"></i>Student Course List</h3>
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
			                  	<a href="">SL No.</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Course Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applicant Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Father Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Mother Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Phone Number</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Qualification</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Previous Course</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Applied Course</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Session</a>
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
			              	@forelse($students as $student)
			            	<tr>
			                  <td class="text-center">
			                  	<input type="checkbox" name="selected[]" value="{{$student->id}}">
			                  </td>
			                  <td class="text-left">{{(($students->currentpage()-1)*$students->perpage())+$loop->iteration}}</td>
			                  <td class="text-left">{{$student->course_category_name}}</td>
			                  <td class="text-left">{{$student->applicant_name}}</td>
			                  <td class="text-left">{{$student->father_name}}</td>
			                  <td class="text-left">{{$student->mother_name}}</td>
			                  <td class="text-left">{{$student->mobile}}</td>
			                  <td class="text-left">{{$student->qualification}}</td>
			                  <td class="text-left">{{$student->previouscourse	}}</td>
			                  <td class="text-left">{{$student->anotherappliedcourse}}</td>
			                  <td class="text-left">{{$student->session_name}}</td>
			                  <td class="text-left">{{$student->status}}</td>
			                  <td class="text-right"><a href="{{route('admin.studentCourseView',[$student->id])}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
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
      	<div class="row">
      		<div class="col-12">
      			<div class="row">
      				<div class="col-4">
      					<p style="text-align: center; font-family: sans-serif; font-size: 15px; color: #1aa3ec;">Page {{$students->currentpage()}} of {{$students->lastpage()}} (Total {{$students->total()}} Entries)</p> 
      				</div>
      			</div>
      		</div>		 
		</div>
    </form>
    <div class="col-md-12">
    	<div class="row">
          	<div class="col-md-5 m-auto" style="margin-left: 600px;">
          		{{$students->links()}}
          	</div>
      	</div>
    </div>
</div>
@endsection