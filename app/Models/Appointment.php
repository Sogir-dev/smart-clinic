<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [

        'booking_code',

        'full_name',

        'email',

        'phone',

        'gender',

        'age',

        'department',

        'doctor',

        'appointment_date',

        'appointment_time',

        'address',

        'reason',

        'status'
    ];
}