@extends('Layouts.Admin')
@section('title')
	Student Course List
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
	<form action="{{route('admin.noticeDelete')}}" enctype="multipart/form-data" id="form-user">
    	{{csrf_field()}}
	  	<div class="page-header">
		    <div class="container-fluid">
		      <div class="pull-right"><a href="{{route('admin.noticeForm')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title=""><i class="fa fa-plus"></i></a>
		        <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger"><a href="{{route('admin.noticeDelete')}}"><i class="fa fa-trash-o"></i></a>
		        </button>
		      </div>
		      <h1>Student Course List Information</h1>
		      <ul class="breadcrumb">
		      </ul>
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
			                  	<a href="">Occupation</a>
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
			                  <td class="text-left">{{$student->course_category_name}}</td>
			                  <td class="text-left">{{$student->applicant_name}}</td>
			                  <td class="text-left">{{$student->father_name}}</td>
			                  <td class="text-left">{{$student->mother_name}}</td>
			                  <td class="text-left">{{$student->occupation}}</td>
			                  <td class="text-left">{{$student->qualification}}</td>
			                  <td class="text-left">{{$student->previouscourse	}}</td>
			                  <td class="text-left">{{$student->anotherappliedcourse}}</td>
			                  <td class="text-right"><a href="" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
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