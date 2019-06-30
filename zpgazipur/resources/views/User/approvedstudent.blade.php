@extends('Layouts.user-home')
@section('title')
	Approved Student List
@endsection
@section('container')
<div id="content col-md-12">
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
		      <div class="pull-right">
		      </div>
		      <h1>Approved Student List</h1>
		    </div><br><br>
		  	<div class="container-fluid">
			    <div class="panel panel-default">
			      <div class="panel-body">
			          <div class="table-responsive">
			            <table class="table table-bordered table-hover">
			              <thead>
			                <tr>
			                	<td class="text-left">
			                  	<a href="">SL No.</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Course Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Father's Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Mother's Name</a>
			                  </td>
			                  <td class="text-left">
			                  	<a href="">Session</a>
			                  </td>
			                </tr>
			              </thead>
			              <tbody>
			              	@php
			              		$i=0;
			              	@endphp
			              	@forelse($students as $student)
			              		@php
			              			$i++;
			              		@endphp	
			            	<tr>
			                  <td class="text-left">{{$i}}</td>
			                  <td class="text-left">{{$student->applicant_name}}</td>
			                  <td class="text-left">{{$student->course_category_name}}</td>
			                  <td class="text-left">{{$student->father_name}}</td>
			                  <td class="text-left">{{$student->mother_name}}</td>
			                  <td class="text-left">{{$student->session}}</td>
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