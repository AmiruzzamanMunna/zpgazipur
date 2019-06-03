@extends('Layouts.user-home')
@section('title')
	All View 
@endsection
@section('container')
	@forelse($posts as $post)
	{!!$post->description!!}
	@empty
	<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
@endsection