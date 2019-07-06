@extends('Layouts.user-home')
@section('title')
	All View 
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
	@forelse($posts as $post)
  @if($post->attachment_title)<br><br><br>
    <a href="{{route('user.pdfview',$post->id)}}" style="margin-left: 350px;">{{$post->attachment_title}}</a>
  @endif
	@if($post->image && $post->length && $post->width)
		<div class="container">
		  <div class="content text-center">
		      <div class="content-overlay"></div>
			     <img class="popup_image content-image mx-auto d-block" src="{{asset('images')}}/{{$post->image}}" style="height:{{$post->length}}px;width:{{$post->width}}px;">
		      <div class="content-details fadeIn-bottom">
		      </div>
		  </div>
		</div>
  @elseif($post->image)
  <div class="container">
      <div class="content">
          <div class="content-overlay"></div>
           <img class="content-image popup_image" src="{{asset('images')}}/{{$post->image}}" style="height:500px;width:400px; margin-left:100px;">
          <div class="content-details fadeIn-bottom">
            <h4 class="content-title">View Image</h4>
          </div>
      </div>
    </div>
  @endif
	<div style="margin-left:50px;">
		{!!$post->description!!}
	</div>
	@if($post->image2)
		<div class="container">
		  <div class="content">
		      <div class="content-overlay"></div>
			     <img class="content-image popup_image" src="{{asset('images')}}/{{$post->image2}}" style="height:500px;width:400px; margin-left:100px;">
		      <div class="content-details fadeIn-bottom">
		        <h4 class="content-title">View Image</h4>
		      </div>
		  </div>
		</div>
	@endif
	@empty
	<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
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

.content-details h4{
  color: #fff;
  font-weight: 100;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
  margin-left: 188px;
}

.content-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-bottom{
  top: 80%;
}

</style>