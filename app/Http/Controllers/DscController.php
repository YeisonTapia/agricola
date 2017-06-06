<?php namespace agricolacentral\Http\Controllers;

use agricolacentral\Http\Requests;
use agricolacentral\Http\Controllers\Controller;

use Illuminate\Http\Request;

class dscController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dsc = \agricolacentral\dsc::All();
		return view ('dsc.index',compact('dsc'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$dsc = \agricolacentral\dsc::All();
		return view('dsc.create',compact('dsc'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		\agricolacentral\dsc::create([
			'fecha' => $request['fecha'],
			'Num_Cont' => $request['Num_Cont'],
			'Actividad' => $request['Actividad'],
			'val_contra' => $request['val_contra'],
			'apor_se_soci' => $request['apor_se_soci'],
			'aport_volu' => $request['aport_volu'],
			'aport_afc' => $request['aport_afc'],
			'decla_renta' => $request['decla_renta'],
			'ingre_corr' => $request['ingre_corr'],
			'ingre_anual' => $request['ingre_anual'],
			]);
		return redirect ('/dsc')->with('message','store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$dsc = \agricolacentral\dsc::find($id);
		$view = view ('dsc.show',compact('dsc'));
      	$pdf = \App::make('dompdf.wrapper');
       	$pdf->loadHTML($view);
       	
       	return $pdf->stream('Declaraciondesoporte');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$dsc = \agricolacentral\dsc::find($id);
		return view ('dsc.edit',compact('dsc'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$dsc = \agricolacentral\dsc::find($id);
		$dsc->fill($request->all());
		$dsc->save();
		return redirect ('/dsc')->with('message','store');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$dsc = \agricolacentral\dsc::find($id);
		$dsc->delete();
		return redirect ('/dsc')->with('message','store');
	}

}
