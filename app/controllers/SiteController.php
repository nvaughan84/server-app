<?php

class SiteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sites = Site::orderBy('domain')->get();
		return View::make('sites/index')->with('sites', $sites);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$servers = Server::lists('name', 'id');
		return View::make('sites/create')->with('servers', $servers);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$domain = Input::get('domain');
		$server = Input::get('server');
		$site = new Site;
		$site->domain = $domain;
		$site->server_id = $server;
		$site->save();
		return Redirect::to('sites');
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
		return View::make('servers/view')->with('server', $site);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$site = Site::find($id);
		$servers = Server::lists('name', 'id');
		return View::make('sites/edit')->with('site', $site)->with('servers', $servers);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$domain = Input::get('domain');
		$server = Input::get('server');
		$site = Site::find($id);
		$site->domain = $domain;
		$site->server_id = $server;
		$site->save();

		return Redirect::to('sites');
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