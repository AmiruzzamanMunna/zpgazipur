@extends('Layouts.user-home')
@section('title')
	Gallary 
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
<div class="row">
  @forelse($gallaryimages as $post)
  	@if($post->name)
      <div id="mdb-lightbox-ui"></div>
      <div class="mdb-lightbox no-margin col-3">
          <div class="content">
            <div class="content-overlay"></div>
              <img src="{{asset('images/gallary')}}/{{$post->name}}" class="popup_image img-fluid content-image">
            <div class="content-details fadeIn-bottom">
              <h4 class="content-title" style="color: white;">View Image</h4>
            </div>
          </div>
      </div>
    @endif
  @empty
    <h1 style="color: red;">Sorry No Data is Available !!</h1>
  @endforelse
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