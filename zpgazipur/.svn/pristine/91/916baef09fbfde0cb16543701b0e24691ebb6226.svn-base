<html dir="ltr" lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>জেলা পরিষদ, গাজীপুর</title>
<head>
<base href="http://localhost:8080/zpgazipur/">
<meta name="description" content="জেলা পরিষদ, গাজীপুর">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
  @yield('script')
<link href="{{asset('js')}}/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">
<link href="{{asset('css')}}/theme/default/stylesheet/zpgazipurstyle.css" rel="stylesheet">
<link href="{{asset('css')}}/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
<link href="{{asset('js')}}/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen">
<link href="{{asset('js')}}/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen">
<script src="{{asset('js')}}/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
<!-- <script src="{{asset('js')}}/javascript/common.js" type="text/javascript"></script> -->
<link href="{{asset('images')}}/catalog/cart.png" rel="icon">
@yield('css')
</head>
<body>
	<nav id="top">
	 	<div class="container">
			<div id="zp-top" class="pull-left">
				<div class="zp-info-search">
					<a href="{{route('user.index')}}" class="pull-left zp-link-national">বাংলাদেশ জাতীয় তথ্য বাতায়ন</a>
					<div class="pull-right">
						<form method="get" action="{{route('user.searchResult')}}">
							<div id="search" class="input-group">
			  					<input type="text" name="search" value="" placeholder="Search" class="form-control input-lg">
							  	<span class="input-group-btn">
								    <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
							  	</span>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="google_translate_element" class="pull-right"></div>
			<script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
				}
			</script>
			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
			</script>
		    <div id="top-links" class="nav pull-right">
		    </div>
	  	</div>
	</nav>
	<div id="common-home" class="container">
		<div class="">
			<div class="col-sm-8 col-md-12">
				<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
				  	<ul class="carousel-indicators">
				  		@foreach($images as $file)
					    <li data-target="#demo" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
					    @endforeach
				  	</ul>

						<!-- The slideshow -->
					
				  	<div class="carousel-inner">
				  		@foreach($images as $image)
					    <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
					      <img src="{{asset('images/slider')}}/{{$image->image}}" alt="Los Angeles" class="caruimage img-responsive" style="height: 300px;">
					    </div>
					    @endforeach
				  	</div>
					<!-- Left and right controls -->
				  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
				  	</a>
				  	<a class="carousel-control-next" href="#demo" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
				  	</a>
				</div>
		  		<nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light btn btn-navbar">
		  		 	<div class="navbar-header"><span id="category" class="visible-xs"></span>
				      <!-- <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fa fa-bars"></i>
				      </button> -->
				    </div>
				    <div class="" id="collapsibleNavbar">
                            <span class=""></span>
				      	<ul class="nav navbar-nav">
							<li class="nav-item active">
								<a href="{{route('user.index')}}"><i class="fa fa-home" style="font-size: 18px;"></i>&nbsp;&nbsp;প্রথম পাতা</a>
							</li>
							@foreach($menus as $menu)
					        <li class="dropdown"><a href="" class="dropdown-toggle nav-item" style="margin-left: 13px;" data-toggle="dropdown" aria-expanded="true">{{$menu->menu_title}}&nbsp</a>
								<div class="dropdown-menu" style="">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											@forelse($menu->submenus as $sb)
											<li><a href="{{route('user.allView',[$menu->id,$sb->id])}}">{{$sb->submenu_name}}</a></li>	
											@empty
											@endforelse	
										</ul>
									</div>
					            </div>    
					        </li>
					        @endforeach
					        <li class="dropdown"><a href="" class="dropdown-toggle" style="margin-left: 10px;" data-toggle="dropdown">আবেদন ফরম&nbsp;</a>
								<div class="dropdown-menu" style="">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li><a href="{{route('user.studentForm')}}">প্রশিক্ষণ কোর্সে ভর্তির আবেদন ফরম</a>
											</li>
											<li>
												<a href="{{route('user.studentWaiverForm')}}">শিক্ষাবৃত্তির আবেদন ফরম</a>
											</li>
										</ul>
									</div>
					            </div>
							</li>
							<li class="dropdown"><a href="" class="dropdown-toggle" style="margin-left: 10px;" data-toggle="dropdown">গ্যালারি&nbsp;</a>
								<div class="dropdown-menu" style="">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li><a href="{{route('user.gallary')}}">ছবি</a></li>
										</ul>
									</div>
					            </div>
							</li>
				      	</ul>
				    </div>
			  	</nav><br>
			  	<marquee style="color:#FF0000;font:Arial;" scrollamount="5" scrolldelay="10" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
			  		@foreach($address as $add)
			  		<a href="{{route('user.address',[$add->id])}}">{{$add->name}}</a>
			  		@endforeach
			  	</marquee><br><br>
				<script type="text/javascript">
					$('#slideshow0').swiper({
						mode: 'horizontal',
						slidesPerView: 1,
						pagination: '.slideshow0',
						paginationClickable: true,
						nextButton: '.swiper-button-next',
					    prevButton: '.swiper-button-prev',
					    spaceBetween: 30,
						autoplay: 2500,
					    autoplayDisableOnInteraction: true,
						loop: true,
						effect: 'fade',
						speed: 3000,
						fadeEffect: {
							crossFade: true
						  }
					});
				</script>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-9 col-md-9">
				@yield('container')
			</div>
			<div id="column-right" class="col-sm-3 col-md-3 hidden-xs">
			    <div id="right_bar" class="row">
					<div class="col-md-12">
						@forelse($desigs as $desig)
						<div class="add_links">
							<h5 class="message-title">{{$desig->heading}}</h5>
							<a href="{{route('user.designationView',[$desig->id])}}">
								<img class="img-fluid picture" src="{{asset('images/catalog/Users')}}/{{$desig->image}}">
							</a>
							<div class="footer">
								<p class="message-name">{{$desig->name}}</p>
								<p class="message-name"><a class="message-link" href="{{route('user.designationView',[$desig->id])}}">বিস্তারিত</a></p>
							</div>
						</div>
						@empty
						@endforelse
						<div class="add_links">
							<table style="width:100%;table-layout:fixed;">
								<tbody>
									<tr>
										<td class="apply-online">
											<a href="/site/view/jobcorner" style="" title="চাকুরি (০)">
												<span>চাকুরি <sup>(০)</sup></span>
											</a>
										</td>
										<td class="apply-online">
											<a href="/site/view/tendercorner" style="" title="টেন্ডার (০)">
												<span>টেন্ডার <sup>(০)</sup></span>
											</a>
										</td>
										<td class="apply-online">
											<a href="/site/view/adcorner" style="" title="বিজ্ঞাপন (০)">
												<span>বিজ্ঞাপন <sup>(০)</sup></span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="add_links">
							<div class="central-eservices itemlink">
								<h5 class="eservice-title title-central">কেন্দ্রীয় ই-সেবা</h5>
								<ul>
									<li class="itemlink"><a href="http://online.forms.gov.bd/" title="অনলাইনে সেবার আবেদন">অনলাইনে সেবার আবেদন</a></li>
									<li class="itemlink"><a href="http://www.nothi.gov.bd/users/login" title="নথি">নথি</a></li>
									<li class="itemlink"><a href="http://bangladesh.gov.bd/site/page/5c238920-a65f-4168-9c2b-70c39dc7cb1c" title="প্রয়োজনীয় এপস ">প্রয়োজনীয় এপস </a></li>
									<li class="itemlink"><a href="http://bris.lgd.gov.bd/pub/?pg=application_form" title="জন্ম ও মৃত্যু নিবন্ধন">জন্ম ও মৃত্যু নিবন্ধন</a></li>
									<li class="itemlink"><a href="http://xn--d5by7bap7cc3ici3m.xn--54b7fta0cc/" title="উত্তরাধিকার ক্যালকুলেটর">উত্তরাধিকার ক্যালকুলেটর</a></li>
									<li class="itemlink"><a href="http://pcc.police.gov.bd/en/" title="অনলাইন পুলিশ ক্লিয়ারেন্স">অনলাইন পুলিশ ক্লিয়ারেন্স</a></li>
									<li class="itemlink"><a href="http://www.dip.gov.bd/site/page/f2d015a9-1132-4426-8eef-147f1c4bac8a" title="অনলাইনে পাসপোর্টের আবেদন">অনলাইনে পাসপোর্টের আবেদন</a></li>
									<li class="itemlink"><a href="https://services.nidw.gov.bd/" title="জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরণ">জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরণ</a></li>
									<li class="itemlink"><a href="http://www.cga.gov.bd/index.php?option=com_wrapper" title="অনলাইন চালান যাচাইকরণ">অনলাইন চালান যাচাইকরণ</a></li>
									<li class="itemlink"><a href="http://www.nbrepayment.gov.bd/" title="অনলাইন আয়কর পরিশোধ">অনলাইন আয়কর পরিশোধ</a></li>
									<li class="itemlink"><a href="http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction" title=" ভিসা যাচাই "> ভিসা যাচাই </a></li>
									<li class="itemlink"><a href="http://www.echallan.gov.bd/" title="ই চালান">ই চালান</a></li>
									<li class="item"><a href="http://accessibledictionary.gov.bd/" title="অভিগম্য অভিধান ">অভিগম্য অভিধান </a></li>					
								</ul>
							</div>
						</div>
						<div class="add_links itemlink">
							<div class="central-eservices">
								<h5 class="eservice-title title-dist">ই-সেবা কেন্দ্র, জেলা প্রশাসন</h5>
								<ul>
									<li class="itemlink"><a href="/site/eservices/9caa8751-1db3-4bb5-9659-baff7cc39bef/নকলের-জন্য-আবেদন" title="নকলের জন্য আবেদন">নকলের জন্য আবেদন</a></li>
								</ul>
							</div>
						</div>
						<div class="add_links">
							<div class="central-eservices itemlink">
								<h5 class="eservice-title title-other">আভ্যন্তরীণ ই-সেবা</h5>
								<ul>
									<li class="itemlink"><a href="/site/view/process_map/সেবা-পাবার-ধাপ-" title="সেবা পাবার ধাপ ">সেবা পাবার ধাপ </a></li>
									<li class="itemlink"><a href="/site/view/info_officers/তথ্য-প্রদানকারী-কর্মকর্তা" title="তথ্য প্রদানকারী কর্মকর্তা">তথ্য প্রদানকারী কর্মকর্তা</a></li>
									<li class="itemlink"><a href="http://bdlaws.minlaw.gov.bd/" title="অন্যান্য  আইন">অন্যান্য  আইন</a></li>
									<li class="itemlink"><a href="http://bdlaws.minlaw.gov.bd/bangla_all_sections.php?id=1011/" title="তথ্য অধিকার আইন">তথ্য অধিকার আইন</a></li>
									<li class="itemlink"><a href="http://bdlaws.minlaw.gov.bd/bangla_all_sections.php?id=950/" title="তথ্য প্রযুক্তি আইন ">তথ্য প্রযুক্তি আইন </a></li>
									<li class="itemlink"><a href="/site/view/e-directory/ই--ডিরেক্টরী" title="ই- ডিরেক্টরী">ই- ডিরেক্টরী</a></li>
									<li class="itemlink"><a href="https://www.facebook.com/জেলা-প্রশাসনগাজীপুর-553490618156444/" title="সামাজিক যোগাযোগ ফেসবুক">সামাজিক যোগাযোগ ফেসবুক</a></li>
									<li class="itemlink"><a href="https://www.teachers.gov.bd/" title="শিক্ষক বাতায়ন">শিক্ষক বাতায়ন</a></li>
									<li class="itemlink"><a href="http://online.forms.gov.bd/" title="বাংলাদেশ ফরম (অনলাইন)">বাংলাদেশ ফরম (অনলাইন)</a></li>
									<li class="itemlink"><a href="http://www.forms.gov.bd/" title="বাংলাদেশ ফরম ( ডাউন লোড )">বাংলাদেশ ফরম ( ডাউন লোড )</a></li>
									<li class="itemlink"><a href="/site/videogallery/d9d62def-2014-11e7-8f57-286ed488c766/ডিজিটাল-গাজীপুর" title="ডিজিটাল গাজীপুর">ডিজিটাল গাজীপুর</a></li>
									<li class="itemlink"><a href="https://play.google.com/store/apps/details?id=com.vumi.seba/" title="ভূমি সেবা- মোবাইল অ্যাপ">ভূমি সেবা- মোবাইল অ্যাপ</a></li>
									<li class="itemlink"><a href="/site/page/8a868c73-e443-4b28-9200-a475a564c993/প্রয়োজনীয়-বিধি-ও-নীতিমালা" title="প্রয়োজনীয় বিধি ও নীতিমালা">প্রয়োজনীয় বিধি ও নীতিমালা</a></li>
								</ul>
							</div>
						</div>
						<div class="add_links">
							<div class="central-eservices">
								<h5 class="eservice-title title-inno"><a title="ইনোভেশন কর্নার" href="/site/view/innovation_corner">ইনোভেশন কর্নার</a></h5>	
							</div>
						</div>
						<div class="add_links">
							<div class="central-eservices">
								<h5 class="eservice-title title-feed"><a title="আপনার মতামত" href="/site/view/portalfeedback">আপনার মতামত</a></h5>	
							</div>
						</div>
						<div class="add_links">
							<div class="central-eservices">
								<h5 class="eservice-title title-social">সামাজিক যোগাযোগ মাধ্যম</h5><br>
								<a title="" href="https://www.facebook.com/gazipurzilaporishod/" target="_blank" class="share-buttons"> 
									<img src="{{asset('css')}}/theme/default/image/facebook.png" alt="" width="30px">
								</a>
								<a title=" " href="http://www.twitter.com" target="_blank" class="share-buttons"> 
									<img src="{{asset('css')}}/theme/default/image/twitter.png" alt="" width="30px">
								</a> 
								<a title=" " href="https://www.youtube.com/channel/UCP99H5x1LjNIkYlbxWiyYag" target="_blank" class="share-buttons"> 
									<img src="{{asset('css')}}/theme/default/image/youtube.png" alt="" width="30px">
								</a>
							</div>
						</div>
						<div class="add_links">
							<div class="central-eservices">
								<h5 class="eservice-title title-fall" style="border: none;">ফল আর্মিওয়ার্ম পর্যবেক্ষণ ও সনাক্তকরণ</h5>
								<iframe src="https://www.youtube.com/embed/zBAKSZqTkRg?rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="100%" height="220" frameborder="0"></iframe>
							</div>
						</div>
					</div>
				</div>
  			</div>	
		</div>
		<footer>
			<div class="whitebreak"></div>
	  		 	<div class="container dtls">
	  			<div class="row" id="dtls">
	  				@foreach($menus as $menu)
  					<div class="bot_col col-lg-3 col-md-3 col-sm-12 col-xm-12"><br>
  						<h3 class="dtls-fotter">{{$menu->menu_title}}</h3><br>
  						@foreach($menu->submenus as $sb)
  						<ul class="fotter-ul">
  							<li><a href="{{route('user.allView',[$menu->id,$sb->id])}}">{{$sb->submenu_name}}</a></li>
  						</ul>
  						@endforeach
  					</div>
  					@endforeach
	  			</div>
	  		</div>
					<div class="whitebreak"></div>
			<div class="container">
			    <div class="row">
		            <div class="col-sm-3">
				        
			      	</div>
	            	<div class="col-sm-3">
			      	</div>
			      	<div class="col-sm-3">
			      	</div>
			    </div>
			</div>
			<div class="copypast">
				<hr>
				<p>জেলা পরিষদ, গাজীপুর © 2019</p>
			</div>
		</footer><br>
	</div>
</body>
</html>
