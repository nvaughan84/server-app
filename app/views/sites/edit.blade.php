@extends('master')

@section('header')    
    	<h2>Edit domain</h2>
@stop

@section('content')    
    	{{ Form::open(array('url' => 'sites/'.$site->id, 'method' => 'put')) }}
    	{{ Form::text('domain', $site->domain) }}
    	{{ Form::select('server', $servers) }}
    	{{ Form::submit('Update') }}
		{{ Form::close() }}
		
@stop