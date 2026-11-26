<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
       protected $fillable = [
                'appointment_id',
                'reminder_at',
                'message',
                'status'
        ];

        public function appointment(){
            return $this->belongsTo(Appointment::class);
        }
}
