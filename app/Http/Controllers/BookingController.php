<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Vehicle;
use App\User;

use Illuminate\Http\Request;

class BookingController extends Controller
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
    $vehicles = Vehicle::all()->where('status', 1);
    $hiring = Booking::all();

    return view('booking.index', compact('hiring', 'vehicles'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $option = array('' => 'Please Select Vehicle of your choice');
    $driverOption = array('' => 'Please Select driver of your choice');

    $vehicles = Vehicle::all()->where('status', 1);
    foreach ($vehicles as $vehicle) {
      $option[$vehicle->id] = $vehicle->name . '(Rs.' . $vehicle->hiring_cost . ')';
    }

    $drivers = User::all()->where('user_type', 'driver');
    foreach ($drivers as $driver) {
      $driverOption[$driver->name] = $driver->name;
    }

    return view('booking.create', compact('option', 'driverOption', 'vehicles'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Booking::create($request->all());

    return redirect('booking');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $vehicles = Vehicle::all()->where('status', 1);
    $hire = Booking::find($id);

    return view('booking.show', compact('hire', 'vehicles'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
