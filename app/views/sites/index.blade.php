@extends('master')

@section('header')    
    	<h2>All Websites</h2>
    	<p>{{ link_to('sites/create', 'Add', $attributes = array()) }}</p>
@stop

@section('content')
    @foreach ($sites as $site)
    	<p><a href='sites/{{$site->id}}/edit'>{{$site->domain}}</a></p>
	@endforeach

@stop