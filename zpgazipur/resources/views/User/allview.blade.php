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
	
$(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
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
	@forelse($posts as $post)
	@if($post->image)
	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
		<img src="{{asset('images')}}/{{$post->image}}" class="image zoom popup_image" title='View Image' data-toggle='tooltip' style="height:200px;width:auto; margin-left:250px;">
	</div>
	@endif
	<div style="margin-left:50px;">
		{!!$post->description!!}
	</div>
	@if($post->image2)
	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
		<img src="{{asset('images')}}/{{$post->image2}}" class="image zoom popup_image" title='View Image' data-toggle='tooltip' style="height:200px;width:auto; margin-left:250px;">
	</div>
	@endif
	@empty
	<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
@endsection


<style>
img.zoom {
    width: 100%;
    height: 200px;
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