<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Availability;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'name',
        'degree_section',
        'speciality',
        'experience',
        'degree_year',
        'review',
        'appointment_number',
        'map_direction',
        'photo_path',
        'bio_info',
        'slug',
        'hospital_name',
        'address',
        'landmark',
        'phone',
        'rating',
        'service_heading',
        'services',
        'education',
    ];

    protected $casts = [
        'services' => 'array', // Automatically casts JSON to array
        'education' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug'; 
    }
    public function availability()
    {
        return $this->hasMany(Availability::class);
    }

}