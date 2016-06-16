@extends('layout')

@section('content')
	@if ($count>0) 
		@for ($i=0;$i<$count;$i++)  <!--Looping through response array-->
			<h3><a href="{{ $response[$type][$i]['url'] }}"> {{ $response[$type][$i]['title'] }} </a></h3>
			<p>{{ $response[$type][$i]['kwic'] }}</p>
		@endfor
	@endif	
@stop