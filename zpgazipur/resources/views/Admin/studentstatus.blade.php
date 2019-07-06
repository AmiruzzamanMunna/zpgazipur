@extends('Layouts.Admin')
@section('title')
	Student Course Title
@endsection
@section('script')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>  
  <script>
    $(document).ready(function() {
        $('.summernote').summernote({
          height:400,
        });
    });
</script>
@endsection
@section('container')
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" href=""  form="form-user" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Save"><i class="fa fa-save"></i></button>
        <a href="{{route('admin.studentCourseList')}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
      <h1>Student Course Status</h1>
      <ul class="breadcrumb">
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> </h3>
      </div>
      <div class="panel-body">
        <form action="" method="post" enctype="multipart/form-data" id="form-user" class="form-horizontal">
          {{csrf_field()}}
          @foreach($students as $student)
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">প্রশিক্ষণ কোর্সের নাম</label>
            <div class="col-sm-9">
              <input type="text" name="course_category_name" placeholder="প্রশিক্ষণ কোর্সের নাম" id="input-username" class="form-control" value="{{$student->course_category_name}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">প্রশিক্ষণার্থীর নাম</label>
            <div class="col-sm-9">
              <input type="text" name="applicant_name" placeholder="প্রশিক্ষণার্থীর নাম" id="input-username" class="form-control" value="{{$student->applicant_name}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">পিতা / স্বামীর নাম</label>
            <div class="col-sm-9">
              <input type="text" name="father_name" placeholder="পিতা / স্বামীর নাম" id="input-username" class="form-control" value="{{$student->father_name}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">মাতার নাম</label>
            <div class="col-sm-9">
              <input type="text" name="mother_name" placeholder="মাতার নাম" id="input-username" class="form-control" value="{{$student->mother_name}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">পিতা / স্বামী / অভিভাবকের পেশা</label>
            <div class="col-sm-9">
              <input type="text" name="occupation" placeholder="পিতা / স্বামী / অভিভাবকের পেশা" id="input-username" class="form-control" value="{{$student->occupation}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">প্রশিক্ষণার্থীর স্থায়ী ঠিকানা</label>
            <div class="col-sm-9">
              <input type="text" name="permanent_address" placeholder="প্রশিক্ষণার্থীর স্থায়ী ঠিকানা" id="input-username" class="form-control" value="{{$student->permanent_address}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">প্রশিক্ষণার্থীর বর্তমান ঠিকানা</label>
            <div class="col-sm-9">
              <input type="text" name="present_address" placeholder="প্রশিক্ষণার্থীর বর্তমান ঠিকানা" id="input-username" class="form-control" value="{{$student->present_address}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">যোগাযোগের জন্য টেলিফোন / মোবাইল নম্বর</label>
            <div class="col-sm-9">
              <input type="text" name="mobile" placeholder="যোগাযোগের জন্য টেলিফোন / মোবাইল নম্বর" id="input-username" class="form-control" value="{{$student->mobile}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">প্রশিক্ষণার্থীর শিক্ষাগত যোগ্যতা</label>
            <div class="col-sm-9">
              <input type="text" name="qualification" placeholder="প্রশিক্ষণার্থীর শিক্ষাগত যোগ্যতা" id="input-username" class="form-control" value="{{$student->qualification}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">জাতীয় পরিচয় পত্রের নম্বর</label>
            <div class="col-sm-9">
              <input type="text" name="nid" placeholder="জাতীয় পরিচয় পত্রের নম্বর" id="input-username" class="form-control" value="{{$student->nid}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">জন্ম তারিখ</label>
            <div class="col-sm-9">
              <input type="text" name="birthdate" placeholder="2019-2020" id="input-username" class="form-control" value="{{$student->birthdate}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">জেলা পরিষদ হতে ইতিপূর্বে কোন প্রশিক্ষণ গ্রহণ করে থাকলে তার নাম</label>
            <div class="col-sm-9">
              <input type="text" name="previouscourse" placeholder="জেলা পরিষদ হতে ইতিপূর্বে কোন প্রশিক্ষণ গ্রহণ করে থাকলে তার নাম" id="input-username" class="form-control" value="{{$student->previouscourse}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">অন্য কোন প্রশিক্ষণ ট্রেডে আবেদন করে থাকলে তার নাম</label>
            <div class="col-sm-9">
              <input type="text" name="anotherappliedcourse" placeholder="অন্য কোন প্রশিক্ষণ ট্রেডে আবেদন করে থাকলে তার নাম" id="input-username" class="form-control" value="{{$student->anotherappliedcourse}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 labelform" for="input-username">শিক্ষা বর্ষ</label>
            <div class="col-sm-9">
              <input type="text" name="session" placeholder="2019-2020" id="input-username" class="form-control" value="{{$student->session_name}}">
              <div class="text-danger"></div>
            </div>
          </div>
          <div class="form-group required has-error">
            <label class="col-sm-2 labelform" for="input-username">Status</label>
            <div class="col-sm-9">
              <select name="status" id="input-anotherappliedcourse" class="form-control">
                <option>Select ---</option>
                @foreach($statuss as $status)
                  <option value="{{$status->name}}">{{$status->name}}</option>
                @endforeach
              </select>
              <div class="text-danger"></div>
            </div>
          </div>
            </div>
      	</form>
      	<!-- <div class="row">
      		<div class="col-md-12">
      			<div class="row">
      				<div class="btnform"><br><br>
      					<div class="col-md-5">
      					<a class="btn btn-success" href="{{route('admin.statusApproved',[$student->id])}}">Approved</a>
      				</div>
		      		<div class="col-md-5">
		      			<a class="btn btn-danger" href="{{route('admin.statusDeclined',[$student->id])}}">Declined</a>
		      		</div>
      				</div>
      			</div>
      		</div>
      	</div> -->
      	@endforeach
        @if($errors->any())
          <ul>
            @foreach($errors->all() as $error)
              <li style="color: red;">{{$error}}</li>
            @endforeach
          </ul>
        @endif
        @if(session('message'))
          <div class="alert alert-success col-5">
            {{session('message')}}
          </div>
        @endif
  	  </div>  
    </div>
  </div>
</div>
@endsection