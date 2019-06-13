@extends('Layouts.user-home')
@section('title')
	All View 
@endsection
@section('script')
@endsection
@section('container')
	@forelse($posts as $post)
	@if($post->image)
		<img src="{{asset('images')}}/{{$post->image}}" class="image">
	@endif
	{!!$post->description!!}
	@if($post->image2)
		<img src="{{asset('images')}}/{{$post->image2}}" class="image">
	@endif
	@empty
	<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
@endsection