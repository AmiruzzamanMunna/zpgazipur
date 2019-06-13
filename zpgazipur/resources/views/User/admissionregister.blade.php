@extends('Layouts.user-home')
@section('title')
	Registration Form
@endsection
@section('container')
<div class="row">
	<div class="col-md-12 m-auto">
	<h1 class="text-center">প্রশিক্ষণ কোর্সে ভর্তির আবেদন ফরম</h1>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal studentform">
        <fieldset id="account">
          	<div class="form-group row">
            	<label class="col-sm-3 control-label" for="input-coursenameid">প্রশিক্ষণ কোর্সের নাম</label>
	            <div class="col-sm-6">
	              	<select name="coursenameid" id="input-coursenameid" class="form-control">
						<option value="">প্রশিক্ষণ কোর্সের নাম</option>
						@foreach($courses as $course)
						<option value="{{$course->id}}">{{$course->name}}</option>
						@endforeach
				  	</select>
			   </div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-studentname">প্রশিক্ষণার্থীর নাম</label>
	            <div class="col-sm-6">
	              <input type="text" name="studentname" value="" placeholder="প্রশিক্ষণার্থীর নাম" id="input-studentname" class="form-control">
               	</div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-fathername">পিতা / স্বামীর নাম</label>
	            <div class="col-sm-6">
	              <input type="text" name="fathername" value="" placeholder="পিতা / স্বামীর নাম" id="input-fathername" class="form-control">
               	</div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-mothername">মাতার নাম</label>
	            <div class="col-sm-6">
	              <input type="text" name="mothername" value="" placeholder="মাতার নাম" id="input-mothername" class="form-control">
               </div>
          	</div>
        </fieldset>
        <fieldset>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-gurdianoccupation">পিতা / স্বামী / অভিভাবকের পেশা</label>
	            <div class="col-sm-6">
	              <input type="text" name="gurdianoccupation" value="" placeholder="পিতা / স্বামী / অভিভাবকের পেশা" id="input-gurdianoccupation" class="form-control">
               	</div>
          	</div>
          	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-studentpermanentaddress">প্রশিক্ষণার্থীর স্থায়ী ঠিকানা</label>
	            <div class="col-sm-6">
	              <input type="text" name="studentpermanentaddress" value="" placeholder="প্রশিক্ষণার্থীর স্থায়ী ঠিকানা" id="input-studentpermanentaddress" class="form-control">
               	</div>
          	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-studentpresentaddress">প্রশিক্ষণার্থীর বর্তমান ঠিকানা</label>
	            <div class="col-sm-6">
	              <input type="text" name="studentpresentaddress" value="" placeholder="প্রশিক্ষণার্থীর বর্তমান ঠিকানা" id="input-studentpresentaddress" class="form-control">
               	</div>
          	</div>
		  
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-telephone">যোগাযোগের জন্য টেলিফোন / মোবাইল নম্বর</label>
	            <div class="col-sm-6">
	              <input type="text" name="telephone" value="" placeholder="যোগাযোগের জন্য টেলিফোন / মোবাইল নম্বর" id="input-telephone" class="form-control">
               	</div>
          	</div>
		  
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-educationqualification">প্রশিক্ষণার্থীর শিক্ষাগত যোগ্যতা</label>
	            <div class="col-sm-6">
	              <input type="text" name="educationqualification" value="" placeholder="প্রশিক্ষণার্থীর শিক্ষাগত যোগ্যতা" id="input-educationqualification" class="form-control">
               	</div>
          	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-nidnumber">জাতীয় পরিচয় পত্রের নম্বর</label>
	            <div class="col-sm-6">
	              <input type="text" name="nidnumber" value="" placeholder="জাতীয় পরিচয় পত্রের নম্বর" id="input-nidnumber" class="form-control">
               	</div>
          	</div>
		  	<div class="form-group row">
		        <label class="col-sm-3 control-label" for="input-dateofbirth">জন্ম তারিখ</label>
		        <div class="col-sm-6">
		          <input type="text" name="dateofbirth" value="" placeholder="জন্ম তারিখ" id="input-dateofbirth" class="form-control">
	           	</div>
	      	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-previouscourse">জেলা পরিষদ হতে ইতিপূর্বে কোন প্রশিক্ষণ গ্রহণ করে থাকলে তার নাম</label>
	            <div class="col-sm-6">
	              <select name="previouscourse" id="input-previouscourse" class="form-control">
					<option value="-1">জেলা পরিষদ হতে ইতিপূর্বে কোন প্রশিক্ষণ গ্রহণ করে থাকলে তার নাম</option>
					@foreach($courses as $course)
						<option value="{{$course->id}}">{{$course->name}}</option>
					@endforeach
				  </select>
			   	</div>
          	</div>
		  	<div class="form-group row">
	            <label class="col-sm-3 control-label" for="input-anotherappliedcourse">অন্য কোন প্রশিক্ষণ ট্রেডে আবেদন করে থাকলে তার নাম</label>
	            <div class="col-sm-6">
	              	<select name="anotherappliedcourse" id="input-anotherappliedcourse" class="form-control">
						<option value="-1">অন্য কোন প্রশিক্ষণ ট্রেডে আবেদন করে থাকলে তার নাম</option>
						@foreach($courses as $course)
						<option value="{{$course->id}}">{{$course->name}}</option>
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
@endsection