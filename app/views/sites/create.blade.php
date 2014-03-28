@extends('master')

@section('header')    
    	<h2>Add domain</h2>
@stop

@section('content')    
    	{{ Form::open(array('url' => 'sites', 'method' => 'post')) }}
    	{{ Form::text('domain') }}
    	{{ Form::select('server', $servers) }}
    	{{ Form::submit('Add') }}
		{{ Form::close() }}
@stop