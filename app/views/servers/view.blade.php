@extends('master')

@section('header')    
    	<h2>{{$server->name}}</h2>
@stop

@section('content')    

 	@foreach ($sites as $site)
    	<p><a href='/sites/{{$site->id}}/edit'>{{$site->domain}}</a></p>
	@endforeach

@stop