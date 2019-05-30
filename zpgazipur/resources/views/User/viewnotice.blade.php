@extends('Layouts.user-home')
@section('title')
	All Notice
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
					@if($notice->attachment)
					<embed src="{{asset('files')}}/{{$notice->attachment}}" width="100%" height="500px;"></embed>
					@endif	
				@empty
				@endforelse
				<!-- <li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম</a></li>
				<li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি</a></li>
				<li><a href="#" rel="bookmark" title="গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ">গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ</a></li>
				<li><a href="#" rel="bookmark" title="Md Mahbub Alam (NOC)">Md Mahbub Alam (NOC)</a></li>
				<li><a href="#" rel="bookmark" title="Mr. Md Ashraf Hossain ( NOC )">Mr. Md Ashraf Hossain ( NOC )</a></li> -->
            </ul>
			<a class="btn btn-primary pull-right" style="margin-right: 15px;" href="/site/view/notices" title="সকল নোটিশ">সকল</a>
		</div>
	</div>
</div>
@endsection