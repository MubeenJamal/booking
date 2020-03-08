<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking_details';
    protected $fillable = [
        'start_date', 'start_time', 'end_date','end_time', 'car_type', 'service',
        'price', 'service_type', 'name','email', 'phone', 'no_of_seats'
    ];
}
