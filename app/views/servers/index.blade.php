@extends('master')

@section('header')    
    	<h2>All Servers</h2>
    	<p>{{ link_to('servers/create', 'Add', $attributes = array()) }}</p>
@stop

@section('content')
    @foreach ($servers as $server)
    	<p><a href='servers/{{$server->id}}'>{{$server->name}}</a> (<a href='servers/{{$server->id}}/edit'>edit</a>)</p>
	@endforeach

@stop