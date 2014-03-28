@extends('master')

@section('header')    
    	<h2>Edit server</h2>
@stop

@section('content')    
    	{{ Form::open(array('url' => 'servers/'.$server->id, 'method' => 'put')) }}
    	{{ Form::text('name', $server->name) }}
    	{{ Form::text('ip', $server->ip) }}
    	{{ Form::submit('Update') }}
		{{ Form::close() }}
		
@stop