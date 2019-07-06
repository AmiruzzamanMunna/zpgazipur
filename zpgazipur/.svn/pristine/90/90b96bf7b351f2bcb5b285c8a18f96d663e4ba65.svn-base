@extends('Layouts.user-home')
@section('title')
	Registration Form
@endsection
@section('script')
	<script src="{{asset('js')}}/formvalidation.js" type="text/javascript"></script>
@endsection
@section('container')
<div class="row">
 	@if($errors->any())
	<ul>
	@foreach($errors->all() as $error)
	  <li>{{$error}}</li>
	@endforeach
	</ul>
    @endif
    @if(session('message'))
  	<div class="alert alert-success col-5">
	    {{session('message')}}
  	</div>
    @endif
	<div class="col-md-12 m-auto">
	<h1 class="text-center">প্রশিক্ষণ কোর্সে ভর্তির আবেদন ফরম</h1>
	<form name="validform" action="{{route('user.studentFormSave')}}" method="post" enctype="multipart/form-data" class="form-horizontal studentform">
		{{csrf_field()}}
        <fieldset id="account">
	      	<div class="form-group row">
            	<label class="col-sm-3 control-label" for="input-coursenameid">শিক্ষা বর্ষ</label>
	            <div class="col-sm-6">
	              	<select name="session_id" class="form-control" readonly>
						<option value="{{$sessions->session_id}}">{{$sessions->session_name}}</option>
				  	</select>
			   </div>
          	</div>
          	<div class="form-group row">
            	<label class="col-sm-3 control-label" for="input-coursenameid">প্রশিক্ষণ কোর্সের নাম</label>
	            <div class="col-sm-6">
	              	<select name="course_category_name" id="coursenameid" class="form-control">
						<option value="0">প্রশিক্ষণ কোর্সের নাম</option>
						@foreach($courses as $course)
						<option value="{{$course->name}}">{{$course->name}}</option>
						@endforeach
				  	</select>
			   </div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-studentname">প্রশিক্ষণার্থীর নাম</label>
	            <div class="col-sm-6">
	              <input type="text" name="applicant_name" value="" placeholder="প্রশিক্ষণার্থীর নাম" id="studentname" class="form-control">
               	</div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-fathername">পিতা / স্বামীর নাম</label>
	            <div class="col-sm-6">
	              <input type="text" name="father_name" value="" placeholder="পিতা / স্বামীর নাম" id="input-fathername" class="form-control">
               	</div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-mothername">মাতার নাম</label>
	            <div class="col-sm-6">
	              <input type="text" name="mother_name" value="" placeholder="মাতার নাম" id="input-mothername" class="form-control">
               </div>
          	</div>
        </fieldset>
        <fieldset>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-gurdianoccupation">পিতা / স্বামী / অভিভাবকের পেশা</label>
	            <div class="col-sm-6">
	              <input type="text" name="occupation" value="" placeholder="পিতা / স্বামী / অভিভাবকের পেশা" id="input-gurdianoccupation" class="form-control">
               	</div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-studentpermanentaddress">প্রশিক্ষণার্থীর স্থায়ী ঠিকানা</label>
	            <div class="col-sm-6">
	              <input type="text" name="permanent_address" value="" placeholder="প্রশিক্ষণার্থীর স্থায়ী ঠিকানা" id="input-studentpermanentaddress" class="form-control">
               	</div>
          	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-studentpresentaddress">প্রশিক্ষণার্থীর বর্তমান ঠিকানা</label>
	            <div class="col-sm-6">
	              <input type="text" name="present_address" value="" placeholder="প্রশিক্ষণার্থীর বর্তমান ঠিকানা" id="input-studentpresentaddress" class="form-control">
               	</div>
          	</div>
		  
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-telephone">যোগাযোগের জন্য মোবাইল নম্বর</label>
	            <div class="col-sm-6">
	              <input type="text" name="mobile" value="" placeholder="যোগাযোগের জন্য মোবাইল নম্বর" id="input-telephone" class="form-control">
               	</div>
          	</div>
		  
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-educationqualification">প্রশিক্ষণার্থীর শিক্ষাগত যোগ্যতা</label>
	            <div class="col-sm-6">
	              <input type="text" name="qualification" value="" placeholder="প্রশিক্ষণার্থীর শিক্ষাগত যোগ্যতা" id="input-educationqualification" class="form-control">
               	</div>
          	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-nidnumber">জাতীয় পরিচয় পত্রের নম্বর</label>
	            <div class="col-sm-6">
	              <input type="text" name="nid" value="" placeholder="জাতীয় পরিচয় পত্রের নম্বর" id="input-nidnumber" class="form-control">
               	</div>
          	</div>
		  	<div class="form-group row">
		        <label class="col-sm-3 control-label" for="input-dateofbirth">জন্ম তারিখ</label>
		        <div class="col-sm-6">
		          <input type="date" name="birthdate" value="" placeholder="জন্ম তারিখ" id="input-dateofbirth" class="form-control">
	           	</div>
	      	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-previouscourse">জেলা পরিষদ হতে ইতিপূর্বে কোন প্রশিক্ষণ গ্রহণ করে থাকলে তার নাম</label>
	            <div class="col-sm-3">
	              <select name="sessionyear" id="sessionyear" class="form-control">
					<option value="0">জেলা পরিষদ হতে ইতিপূর্বে কোন প্রশিক্ষণ গ্রহণ করে থাকলে তার নাম</option>
					@foreach($coursesessions as $sessionyear)
						<option value="{{$sessionyear->session_id}}">{{$sessionyear->session_name}}</option>
					@endforeach
				  </select>
			   	</div>
			   	<div class="col-sm-3">
	              <select name="previouscourse" id="previouscourse" class="form-control">
					<option value="0">জেলা পরিষদ হতে ইতিপূর্বে কোন প্রশিক্ষণ গ্রহণ করে থাকলে তার নাম</option>
				  </select>
			   	</div>
          	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-anotherappliedcourse">অন্য কোন প্রশিক্ষণ ট্রেডে আবেদন করে থাকলে তার নাম</label>
	            <div class="col-sm-6">
	              	<select name="anotherappliedcourse" id="input-anotherappliedcourse" class="form-control">
						<option value="0">অন্য কোন প্রশিক্ষণ ট্রেডে আবেদন করে থাকলে তার নাম</option>
						@foreach($courses as $course)
						<option value="{{$course->name}}">{{$course->name}}</option>
						@endforeach
				  	</select>
			   	</div>
          	</div>
          	
        </fieldset>
        <div class="buttons">
          <div class="col-sm-4"></div>
		  <div class="col-sm-6 pull-left">
            <input type="submit" value="Continue" class="btn btn-primary">
          </div>
        </div> 
      </form>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$('#sessionyear').change(function(){
			var x=$('#sessionyear').val();
			$.ajax({
				type:'GET',
				url:"{{route('user.preCourse')}}",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data: {
					'Course_ID':x
				},
				success:function(result){

					var courseOptions="";
		            for(var i=0;i<result.length;i++){
		                 courseOptions+='<option value="'+result[i].name+'">'+result[i].name+'</option>';
		            }
		            $('#previouscourse').html(courseOptions);
				},
				error: function(data){
					console.log(data);
				},
			});
		});
	});
</script>
@endsection