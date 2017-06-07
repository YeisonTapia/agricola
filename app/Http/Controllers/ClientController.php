<?php namespace agricolacentral\Http\Controllers;

use agricolacentral\Http\Requests;
use agricolacentral\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		$clients = \agricolacentral\Client::All();
		return view('client.index', compact('clients'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departs = \agricolacentral\Depart::lists('namedepart','id');
		$cities = \agricolacentral\City::lists('namedecity','id');
		return view('client.create', compact('departs','cities'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		\agricolacentral\Client::create([
			'name' => $request['name'],
			'last_name' => $request['last_name'],
			'identification' => $request['identification'],
			'email' => $request['email'],
			'depart_id' => $request['depart'],
			'city_id' => $request['city'],
			'address' => $request['address'],
			'phone' => $request['phone'],
			]);
		return redirect ('/client')->with('message','store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$accounts = \agricolacentral\Account::where('client_id', $id)->get();
		$client = \agricolacentral\Client::find($id);
		return view ('client.show',compact('client','accounts'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$departs = \agricolacentral\Depart::lists('namedepart','id');
		$cities = \agricolacentral\City::lists('namedecity','id');
		$client = \agricolacentral\Client::find($id);
		return view ('client.edit',compact('client','departs','cities'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$client = \agricolacentral\Client::find($id);
		$client->fill($request->all());
		$client->save();
		return redirect ('/client')->with('message','store');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\agricolacentral\Client::destroy($id);
		return redirect ('/client');
	}


}
