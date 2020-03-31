<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Feedback;
use App\Http\Requests;
use App\Vehicle;
use App\User;

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
    $vehicles= Vehicle::all()->where('status',1)->take(3);
    $vehicleCount = count(Vehicle::all());
    $userCount = count(User::all());
    $bookingCount = count(Booking::all());

    return view('welcome', compact('vehicleCount','userCount','bookingCount','vehicles'));
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
