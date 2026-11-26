<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'phone',
        'appointment_date',
        'appointment_time',
        'status',
        'description',
    ];

    public function reminders(){
        return $this->hasMany(Reminder::class);
    }

    
}
