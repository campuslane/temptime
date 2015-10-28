@extends('layouts.temptime')

@section('title', 'Job Openings');

@section('content')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8">
		<h1>Current Job Openings</h1>
		<br><br>
		@foreach($jobs as $job)
			<h3><a href="#">{{ $job->title }}</a></h3> <br>
			{{ $job->description }} 
			<br><br>
			<a href="">More...</a>
			<hr>
		@endforeach
	</div>
</div>
	
		
	
	
@endsection