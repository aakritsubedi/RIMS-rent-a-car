<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Feedback;
use App\Http\Requests;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $vehicles= Vehicle::all();

    return view('welcome', compact('vehicles'));
  }

  public function profile()
  {
    $userId = Auth::user()->id;
    $name = Auth::user()->name;
    $booked = Booking::all()->where('user_id',$userId);
    $owned= Vehicle::all()->where('owner_name',$name);
    $bookings = Booking::all()->where('user_id',$userId);
  
    return view('profile', compact('name','owned','booked','bookings'));
  }
}
