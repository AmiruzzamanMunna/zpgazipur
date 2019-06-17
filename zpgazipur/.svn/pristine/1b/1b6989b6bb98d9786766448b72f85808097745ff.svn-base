@extends('Layouts.user-home')
@section('title')
		Index Page
@endsection
@section('container')
	@forelse($results as $result)
		@if($result->image)
		<img src="{{asset('images')}}/{{$result->image}}" class="image" style="height:200px;width:auto; margin-left:250px;">
	@endif
		{!!$result->description!!}
		@if($result->image2)
		<img src="{{asset('images')}}/{{$result->image2}}" class="image" style="height:200px;width:auto; margin-left:250px;">
	@endif
	@empty
	<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
@endsection