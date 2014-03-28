@extends('master')

@section('header')    
    	<h2>Add server</h2>
@stop

@section('content')    
    	{{ Form::open(array('url' => 'servers', 'method' => 'post')) }}
    	{{ Form::text('name') }}
    	{{ Form::text('ip') }}
    	{{ Form::submit('Add') }}
		{{ Form::close() }}
@stop