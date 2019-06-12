@extends('Layouts.user-home')
@section('title')
	Designation View 
@endsection
@section('script')
@endsection
@section('container')
	@forelse($desigs as $desig)
		<h1>{{$desig->heading}}</h1>
		@if($desig->image)
			<img src="{{asset('images/catalog/Users')}}/{{$desig->image}}" class="image" style="height: 400px; width: auto;">
		@endif
		{!!$desig->description!!}
		@empty
		<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
@endsection