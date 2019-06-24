@extends('Layouts.user-home')
@section('title')
	Pdf View
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

$(document).ready(function(){
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    

</script>
@endsection
@section('container')
<div class="notice-board">
	@forelse($pdfs as $notice)
	<div class="notice-board-bg">
		<h2>{{$notice->attachment_title}}</h2>
		<div id="notice-board-ticker">
			<ul>
				@if($notice->attachment)
				<embed src="{{asset('files')}}/{{$notice->attachment}}" width="600px" height="830px;"></embed><br><br>
				<a href="{{route('admin.downFile',$notice->attachment)}}" class="btn btn-primary">Download File</a>
				@endif	
				<!-- <li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম</a></li>
				<li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি</a></li>
				<li><a href="#" rel="bookmark" title="গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ">গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ</a></li>
				<li><a href="#" rel="bookmark" title="Md Mahbub Alam (NOC)">Md Mahbub Alam (NOC)</a></li>
				<li><a href="#" rel="bookmark" title="Mr. Md Ashraf Hossain ( NOC )">Mr. Md Ashraf Hossain ( NOC )</a></li> -->
            </ul>
		</div>
	</div>
	@empty
	@endforelse
</div>
@endsection

<style>
img.zoom {
    width: 100%;
    height: auto;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}

.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
</style>