@extends('Layouts.user-home')
@section('title')
	All View 
@endsection
@section('script')
@endsection
@section('container')
	@forelse($posts as $post)
	{!!$post->description!!}
	@if($post->image)
		<img src="{{asset('images')}}/{{$post->image}}" class="image">
	@endif
	@empty
	<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
@endsection