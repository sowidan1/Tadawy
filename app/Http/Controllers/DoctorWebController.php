<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Models\Admins;
use App\Models\Doctor;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorWebController extends Controller
{

    
    public function store(StoreDoctorRequest $request)
    {
        $request->validated();

        Doctor::create([
            'name' => $request->input('Full_Name'),
            'email' => $request->input('email'),
            'photo' => $request->input('photo'), 
            'password' => bcrypt($request->input('password')), 
            'phone' => $request->input('phoneNumber'),
            'specialty' => $request->input('specialty'),
            'year_of_experience' => $request->input('year_of_experience'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'clinic_id' => $request->input('clinic'),
        ]);

        return redirect()->back()->with('success', 'Your form has been submitted successfully!');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        $doctorId = $request->input('doctor_id');

        $doctor = Doctor::findOrFail($doctorId);

        $doctor->delete();

        return redirect()->back()->with('success', 'Doctor deleted successfully.');
        
    }
}
