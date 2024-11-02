<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'availabilities';

    // Specify the fillable attributes
    protected $fillable = [
        'doctor_id', // Foreign key to relate to the doctor
        'day',       // Day of the week (e.g., Monday)
        'time',      // Time slots available for the doctor
    ];

    // Define the relationship to the Doctor model
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
