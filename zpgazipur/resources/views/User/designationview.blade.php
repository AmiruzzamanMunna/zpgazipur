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
			<img src="{{asset('images/catalog/Users')}}/{{$desig->image}}" class="image" style="height:200px;width:auto; margin-left:250px;">
		@endif
		<div style="margin-left:50px;">
			{!!$desig->description!!}
		</div>
		@empty
		<h1 style="color: red;">Sorry No Data is Available !!</h1>
	@endforelse
@endsection