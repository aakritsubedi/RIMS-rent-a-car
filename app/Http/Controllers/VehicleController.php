<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vehicle;
use App\Photo;

class VehicleController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$vehicles = Vehicle::all();
		return view('vehicles.index', compact('vehicles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('vehicles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();
		if ($file = $request->file('photo_id')) {
			$name = $input['name'] . $file->getClientOriginalName();
			$file->move('img', $name);
			$photo = Photo::create(['name' => $name]);
			$input['photo_id'] = $photo->id;
		}
		Vehicle::create($input);
		return redirect('/vehicle');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$vehicle = Vehicle::findOrFail($id);
		return view('vehicles.show', compact('vehicle'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$vehicle = Vehicle::findOrFail($id);
		return view('vehicles.edit', compact('vehicle'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$input = $request->all();
		if ($file = $request->file('photo_id')) {
			$name = $input['name'] . $file->getClientOriginalName();
			$file->move('img', $name);
			$photo = Photo::create(['name' => $name]);
			$input['photo_id'] = $photo->id;
		}
		Vehicle::findOrFail($id)->update($input);
		return redirect('/vehicle')->with('msg', 'The item has been updated.');;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$vehicle = Vehicle::findOrFail($id);
		$vehicle->delete();
		return redirect('/vehicle')->with('msg', 'The item has been deleted.');
	}

	public function all()
	{
		$vehicles = Vehicle::all();
		return view('vehicles.allVehicles', compact('vehicles'));
	}
}
