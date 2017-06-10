<?php namespace agricolacentral\Http\Controllers;

use agricolacentral\Http\Requests;
use agricolacentral\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CityController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cities = \agricolacentral\City::All();
		return view('city.index', compact('cities'));
	}

	public function getCities (Request $request,$id){
		if ($request->ajax()){
			$cities = \agricolacentral\City::cities($id);
			return response()->json($cities);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departs = \agricolacentral\Depart::All();
		return view ('city.create',compact('departs'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		\agricolacentral\City::create([
		'namedecity' => $request['namedecity'],
		'depart_id' => $request['depart_id'],
		]);
		return redirect ('/city')->with('message','store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
