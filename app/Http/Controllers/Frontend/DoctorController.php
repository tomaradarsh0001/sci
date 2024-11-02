<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Availability;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; 


class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctors.create');
    }
   
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->city = $request->city;
        $doctor->name = $request->name;
        $doctor->degree_section = $request->degree_section;
        $doctor->speciality = $request->speciality;
        $doctor->experience = $request->experience;
        $doctor->degree_year = $request->degree_year;
        $doctor->review = $request->review;
        $doctor->appointment_number = $request->appointment_number;
        $doctor->map_direction = $request->map_direction;
        $doctor->bio_info = $request->bio_info;
        $doctor->address = $request->address;
        $doctor->hospital_name = $request->hospital_name;
        $doctor->rating = $request->rating;
        $doctor->landmark = $request->landmark;
        $doctor->phone = $request->phone;
        $doctor->service_heading = $request->service_heading;
        $doctor->services = json_encode($request->services);
        $education = [];
        foreach ($request->degree as $key => $degree) {
            $education[] = [
                'degree' => $degree,
                'institution' => $request->institution[$key],
                'year' => $request->year[$key], 
            ];
        }
        $doctor->education = json_encode($education);
        $doctor_experience = [];
        foreach ($request->job_title as $key => $title) {
            $doctor_experience[] = [
                'title' => $title,
                'years' => $request->years[$key],
                'institution1' => $request->institution1[$key],
            ];
        }
    
        $doctor->doctor_experience = json_encode($doctor_experience);
        $achievements = $request->achievements; 
        $doctor->achievements = json_encode($achievements);
        $specialisations = $request->specialisations; 
        $doctor->specialisations = json_encode($specialisations);
        $conditions = [];

if ($request->has('conditions')) {
    foreach ($request->conditions as $condition) {
        if (!empty($condition['question']) && !empty($condition['answer'])) {
            $conditions[] = [
                'question' => $condition['question'],
                'answer' => $condition['answer'],
            ];
        }
    }
}

$doctor->conditions = json_encode($conditions);
    
        $doctor->slug = Str::slug($doctor->name);

        if ($request->hasFile('photo_path')) {
            $doctor->photo_path = $request->file('photo_path')->store('doctors', 'public');
        }

        $doctor->save();

 
   if (!$doctor) {
    return redirect()->back()->withErrors('Failed to create doctor.');
}

if ($request->hasFile('photo_path')) {
    $photoPath = $request->file('photo_path')->store('photos', 'public');
    $doctor->photo_path = $photoPath;
    $doctor->save();
}

$days = is_array($request->input('days')) ? $request->input('days') : [];
$times = is_array($request->input('times')) ? $request->input('times') : [];

if ($doctor->id && count($days) <= 2 && count($times) <= 2) {
    foreach ($days as $index => $day) {
        Availability::create([
            'doctor_id' => $doctor->id,
            'day' => $day,
            'time' => $times[$index] ?? null,
        ]);
    }
}

        return redirect()->route('doctors.index')->with('success', 'Doctor added successfully!');
    }

    public function show($slug)
    {
        $pageTitle = 'High Rated Stem Cell Hospital In Delhi';
        $pageDescription = 'SCI Hospital is the best Stem Cell Hospital In Delhi. We provide cell-based therapies in improving the quality of life for the patients suffering from such diseased conditions';
        $keywords = '';
        $doctor = Doctor::where('slug', $slug)->firstOrFail();
        return view('admin.doctors.show', compact('doctor', 'pageTitle','pageDescription','keywords'));
    }

    public function gurgaonshow($slug)
    {
        $pageTitle = 'High Rated Stem Cell Hospital In Delhi';
        $pageDescription = 'SCI Hospital is the best Stem Cell Hospital In Delhi. We provide cell-based therapies in improving the quality of life for the patients suffering from such diseased conditions';
        $keywords = '';
        $doctor = Doctor::where('slug', $slug)->firstOrFail();
        return view('admin.doctors.gurgaonshow', compact('doctor', 'pageTitle','pageDescription','keywords'));
    }
  
    public function edit(Doctor $doctor)
    {
        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->city = $request->city;
        $doctor->name = $request->name;
        $doctor->degree_section = $request->degree_section;
        $doctor->speciality = $request->speciality;
        $doctor->experience = $request->experience;
        $doctor->degree_year = $request->degree_year;
        $doctor->review = $request->review;
        $doctor->appointment_number = $request->appointment_number;
        $doctor->map_direction = $request->map_direction;
        $doctor->bio_info = $request->bio_info;
        $doctor->address = $request->address;
        $doctor->hospital_name = $request->hospital_name;
        $doctor->rating = $request->rating ?? 0;
        $doctor->landmark = $request->landmark;
        $doctor->phone = $request->phone;
        $doctor->service_heading = $request->service_heading;
        $doctor->services = json_encode($request->services);
        $doctor->slug = Str::slug($doctor->name);
        if ($request->hasFile('photo_path')) {
            $doctor->photo_path = $request->file('photo_path')->store('doctors', 'public');
        }
        Availability::where('doctor_id', $doctor->id)->delete(); // Clear existing availability

        $days = $request->input('days');
        $times = $request->input('times');
    
        foreach ($days as $index => $day) {
            Availability::create([
                'doctor_id' => $doctor->id,
                'day' => $day,
                'time' => $times[$index] ?? null,
            ]);
        }
        $education = [];
        foreach ($request->degree as $key => $degree) {
            $education[] = [
                'degree' => $degree,
                'institution' => $request->institution[$key],
                'year' => $request->year[$key],
            ];
        }
        $doctor->education = json_encode($education);
    
        $doctor_experience = [];
        foreach ($request->job_title as $key => $title) {
            $doctor_experience[] = [
                'title' => $title,
                'years' => $request->years[$key],
                'institution1' => $request->institution1[$key] ?? null, // Use null coalescing
            ];
        }
        $doctor->doctor_experience = json_encode($doctor_experience);
        $achievements = $request->achievements;
        $doctor->achievements = json_encode($achievements);
        $specialisations = $request->specialisations;
        $doctor->specialisations = json_encode($specialisations);
        $doctor_conditions = [];
foreach ($request->conditions as $condition) {
    $doctor_conditions[] = [
        'question' => $condition['question'],
        'answer' => $condition['answer'],
    ];
}
$doctor->conditions = json_encode($doctor_conditions);
    
        $doctor->save();
            return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully!');
    }
    
    

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully!');
    }
    
}
