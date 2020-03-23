<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
      'name','license_plate_no','no_of_seats','vehicle_conditions','ac_status','owner_name','photo_id','hiring_cost','description','status'
    ];
}
