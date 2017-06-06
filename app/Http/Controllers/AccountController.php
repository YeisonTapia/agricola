<?php namespace agricolacentral\Http\Controllers;

use agricolacentral\Http\Requests;
use agricolacentral\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccountController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$accounts = \agricolacentral\Account::All();
		return view ('account.index',compact('accounts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$clients = \agricolacentral\Client::All();
		return view ('account.create', compact('clients'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
			\agricolacentral\Account::create([
			'date' => $request['date'],
			'client_id' => $request['client_id'],
			'details' => $request['details'],
			'price' => $request['price'],
			]);
		return redirect ('/account')->with('message','store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$account = \agricolacentral\Account::find($id);
		$view = view ('account.show',compact('account'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('CuentaDeCobro.pdf');
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
