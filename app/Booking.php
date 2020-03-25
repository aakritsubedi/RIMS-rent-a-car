<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  protected $fillable = ['id', 'vehicle_id', 'user_id', 'drive_name', 'drive_contact_no', 'driver_license_no', 'payment_status', 'travel_date'];

  public function vehicle()
  {
    return $this->belongsTo('App\Vehicle');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
