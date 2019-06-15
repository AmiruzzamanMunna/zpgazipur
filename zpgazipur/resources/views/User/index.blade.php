@extends('Layouts.user-home')
@section('title')
		Index Page
@endsection
@section('container')
<div id="homewindow" class="row">
	<div class="col-md-12">
		<div class="notice-board">
			<div class="notice-board-bg">
				<h2>নোটিশ বোর্ড</h2>
				<div id="notice-board-ticker">
					<ul>
						@forelse($notices as $notice)
							<li>
								<a href="{{route('user.viewNotice',$notice->id)}}" rel="bookmark" title="{{$notice->title}}">{{$notice->title}}</a>
							</li>
						@empty
						@endforelse
						<!-- <li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি ফরম</a></li>
						<li><a href="#" rel="bookmark" title="২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি">২০১৮-১৯ অর্থ বছরের গরিব ও মেধাবী ছাত্র-ছাত্রীদের শিক্ষাবৃত্তি সংক্রান্ত বিজ্ঞপ্তি</a></li>
						<li><a href="#" rel="bookmark" title="গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ">গাজীপুর জেলা পরিষদের ২০ তম সভার নোটিশ</a></li>
						<li><a href="#" rel="bookmark" title="Md Mahbub Alam (NOC)">Md Mahbub Alam (NOC)</a></li>
						<li><a href="#" rel="bookmark" title="Mr. Md Ashraf Hossain ( NOC )">Mr. Md Ashraf Hossain ( NOC )</a></li> -->
                    </ul>
					<a class="btn btn-primary pull-right" style="margin-right: 15px;" href="{{route('user.viewAllNotice')}}" title="সকল নোটিশ">সকল</a>
				</div>
			</div>
		</div>
		<div class="homeSixBlock">
			<div style="background-color: #EFEFEF;border: 1px solid #CCCCCC;margin: 20px 0;padding: 10px;" class="row">
				@forelse($cats as $cat)
				@if($cat->name)
				<div class="block gap">
					<h2 class="widget-title">{{$cat->name}}</h2>
					<ul class="dpe-flexible-posts">
						<img width="150" height="114" src="{{asset('images/uploads')}}/{{$cat->image}}" class="attachment-medium wp-post-image" alt="Social work Final">
						@forelse($cat->othercat as $page)
							<li id="post-684" class="post-684 post type-post status-publish format-standard has-post-thumbnail hentry category---bn">
								<a href="{{route('user.allCategoryView',[$page->id])}}">
									<div class="page_title">{{$page->title}}</div>
								</a>
							</li>
						@empty
						@endforelse
					</ul><!-- .dpe-flexible-posts -->
				</div>
				@endif
				@empty
				@endforelse
				<h5 style="float:left;margin:-3px 5px 0 0; font-weight:bold;"></h5>
				<div id="news-ticker" style="overflow: hidden; position: relative; height: 144px;">
					<ul style="position: absolute; margin: 0px; padding: 0px; width: 95%; top: 0px;">
						<li style="margin: 0px; padding: 0px; height: 144px;"><a href="#" title="প্রেস বিজ্ঞপ্তি: ১১ ফেব্রুয়ারি, ২০১৯ খ্রিস্টাব্দ। ৫৪তম বিশ্ব ইজতেমা আগামী ১৫-১৮ ফেব্রুয়ারি, ২০১৯ অনুষ্ঠিত হবে।">প্রেস বিজ্ঞপ্তি: ১১ ফেব্রুয়ারি, ২০১৯ খ্রিস্টাব্দ। ৫৪তম বিশ্ব ইজতেমা আগামী ১৫-১৮ ফেব্রুয়ারি, ২০১৯ অনুষ্ঠিত হবে।</a>
								<i>(২০১৯-০২-১১)</i>
						</li>
						<li style="margin: 0px; padding: 0px; height: 144px;"><a href="#" title="প্রেস বিজ্ঞপ্তি: ১০ ফেব্রুয়ারি, ২০১৯ খ্রিস্টাব্দ। জেলা ম্যাজিস্ট্রেট ড. দেওয়ান মুহাম্মদ হুমায়ূন কবীর মহোদয়ের সদয় নির্দেশনা অনুযায়ী আজ ১০.০২.২০১৯ তারিখ গাজীপুর সদর এর ডগরী ও পাইনশাইল এলাকায় ইট প্রস্তুত ও ভাটা স্থাপন (নিয়ন্ত্রণ) আইন, ২০১৩ এর ৪ ও ৫ ধারায় মোবাইল কোর্ট পরিচালনা করেন নির্বাহী ম্যাজিস্ট্রেট জনাব তানিয়া ভূঁইয়া।">প্রেস বিজ্ঞপ্তি: ১০ ফেব্রুয়ারি, ২০১৯ খ্রিস্টাব্দ। জেলা ম্যাজিস্ট্রেট ড. দেওয়ান মুহাম্মদ হুমায়ূন কবীর মহোদয়ের সদয় নির্দেশনা অনুযায়ী আজ ১০.০২.২০১৯ তারিখ গাজীপুর সদর এর ডগরী ও পাইনশাইল এলাকায় ইট প্রস্তুত ও ভাটা স্থাপন (নিয়ন্ত্রণ) আইন, ২০১৩ এর ৪ ও ৫ ধারায় মোবাইল কোর্ট পরিচালনা করেন নির্বাহী ম্যাজিস্ট্রেট জনাব তানিয়া ভূঁইয়া।</a>
							<i>(২০১৯-০২-১০)</i>
						</li>
						<li style="margin: 0px; padding: 0px; height: 144px;"><a href="#" title="প্রেস বিজ্ঞপ্তি: ০৯ ফেব্রুয়ারি, ২০১৯ খ্রিস্টাব্দ। আজ (০৯.০২.২০১৯) দিনের শুরুতেই মান্যবর জেলা প্রশাসক ড. দেওয়ান মুহাম্মদ হুমায়ূন কবীর মহোদয়, ব্রাক সিডিএম এ অনুষ্ঠিত কর্মসূচিতে উপস্থিত মাননীয় প্রধান বিচারপতি সৈয়দ মাহমুদ হোসেন এবং সুপ্রিম কোর্টের আপিল বিভাগ ও হাইকোর্ট বিভাগের মাননীয় বিচারপতি ও তাদের পরিবারবর্গকে স্বাগত জানান। পরে তিনি বঙ্গবন্ধু সাফারি পার্কে মাননীয় ধর্ম প্রতিমন্ত্রী এডভোকেট শেখ মোঃ আব্দুল্লাহ, গাজীপুর সিটি কর্পোরেশনের মাননীয় মেয়র জনাব এডভোকেট জাহাঙ্গীর আলম ও গাজীপুর মেট্রোপলিটন পুলিশ কমিশনার জনাব ওয়াই এম বেলালুর রহমান এর সাথে ইজতেমার প্রস্তুতি বিষয়ক বৈঠকে যোগদান করেন এবং পুষ্পদাম রিসোর্ট এ মাননীয় যুব ও ক্রীড়া প্রতিমন্ত্রী জনাব জাহিদ আহসান রাসেল মহোদয় কে ফুলেল শুভেচ্ছা জানান।">প্রেস বিজ্ঞপ্তি: ০৯ ফেব্রুয়ারি, ২০১৯ খ্রিস্টাব্দ। আজ (০৯.০২.২০১৯) দিনের শুরুতেই মান্যবর জেলা প্রশাসক ড. দেওয়ান মুহাম্মদ হুমায়ূন কবীর মহোদয়, ব্রাক সিডিএম এ অনুষ্ঠিত কর্মসূচিতে উপস্থিত মাননীয় প্রধান বিচারপতি সৈয়দ মাহমুদ হোসেন এবং সুপ্রিম কোর্টের আপিল বিভাগ ও হাইকোর্ট বিভাগের মাননীয় বিচারপতি ও তাদের পরিবারবর্গকে স্বাগত জানান। পরে তিনি বঙ্গবন্ধু সাফারি পার্কে মাননীয় ধর্ম প্রতিমন্ত্রী এডভোকেট শেখ মোঃ আব্দুল্লাহ, গাজীপুর সিটি কর্পোরেশনের মাননীয় মেয়র জনাব এডভোকেট জাহাঙ্গীর আলম ও গাজীপুর মেট্রোপলিটন পুলিশ কমিশনার জনাব ওয়াই এম বেলালুর রহমান এর সাথে ইজতেমার প্রস্তুতি বিষয়ক বৈঠকে যোগদান করেন এবং পুষ্পদাম রিসোর্ট এ মাননীয় যুব ও ক্রীড়া প্রতিমন্ত্রী জনাব জাহিদ আহসান রাসেল মহোদয় কে ফুলেল শুভেচ্ছা জানান।</a>
							<i>(২০১৯-০২-১০)</i>
						</li>
					</ul>
				</div>
				<div class="pull-right">
					<!-- <a class="btn btn-primary" href="/site/view/news" title="সকল">সকল</a> -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection