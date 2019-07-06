@extends('Layouts.user-home')
@section('title')
	All Notice
@endsection
@section('script')
<script>
$(document).ready(function() {

  $(".popup_image").on('click', function() {
    w2popup.open({
      title: 'Image',
      body: '<div class="w2ui-centered"><img  src="' + $(this).attr('src') + '"></img></div>',
      width: 1000,
      height: 1000
    });
  });

});
</script>
@endsection
@section('container')
<div class="notice-board">
	<div class="notice-board-bg">
		<h2>নোটিশ বোর্ড</h2>
		<div id="notice-board-ticker">
			<ul>
				@forelse($notices as $notice)
					<p>{{$notice->title}}</p>
					<p>{{$notice->description}}</p>
					@if($notice->image)			
						<div class="container">
						  <div class="content">
						      <div class="content-overlay"></div>
							     <img class="content-image popup_image" src="{{asset('images')}}/{{$notice->image}}" style="margin-bottom: 30px;">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Click To View The Image</h3>
						      </div>
						  </div>
						</div>
					@endif
					@if($notice->attachment)
					<embed src="{{asset('files')}}/{{$notice->attachment}}" width="600px" height="830px;"></embed><br><br>
					<a href="{{route('admin.downFile',$notice->attachment)}}" class="btn btn-primary">Download File</a>
					@endif	
				@empty
				@endforelse
				<!-- <li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম</a></li>
				<li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি</a></li>
				<li><a href="#" rel="bookmark" title="গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ">গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ</a></li>
				<li><a href="#" rel="bookmark" title="Md Mahbub Alam (NOC)">Md Mahbub Alam (NOC)</a></li>
				<li><a href="#" rel="bookmark" title="Mr. Md Ashraf Hossain ( NOC )">Mr. Md Ashraf Hossain ( NOC )</a></li> -->
            </ul>
		</div>
	</div>
</div>
@endsection

<style>
.content {
  position: relative;
  width: 90%;
  max-width: 500px;
  margin: auto;
  overflow: hidden;
}

/*.content .content-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 99%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}*/

.content:hover .content-overlay{
  opacity: 1;
}

.content-image{
  cursor: pointer;
  width: 100%;
  margin-top: 5px;
  margin-bottom: 5px;
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-bottom{
  top: 80%;
}

</style>