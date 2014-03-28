<?php

class ServerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$servers = Server::orderBy('name')->get();
		return View::make('servers/index')->with('servers', $servers);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('servers/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$name = Input::get('name');
		$ip = Input::get('ip');
		$server = new Server;
		$server->name = $name;
		$server->ip = $ip;
		$server->save();
		return Redirect::to('servers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$server = Server::find($id);
		$sites = Site::orderBy('domain')->where('server_id','=',$id)->get();
		return View::make('servers/view')->with('server', $server)->with('sites', $sites);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$server = Server::find($id);
		return View::make('servers/edit')->with('server', $server);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$name = Input::get('name');
		$ip = Input::get('ip');

		$server = Server::find($id);
		$server->name = $name;
		$server->ip = $ip;

		$server->save();

		return Redirect::to('servers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}