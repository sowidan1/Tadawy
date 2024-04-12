<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientWebController extends Controller
{
    
    public function store(StorePatientRequest $request)
    {
        $request->validated();

        Patient::create([
            'name' => $request->input('Full_Name'),
            'photo  ' => $request->photo,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phoneNumber,
            'medical_history' => $request->medical_history,
            'emergency_contact' => $request->emergency_contact,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'doctor_id' => $request->doctor_id,
        ]);

        return redirect()->back()->with('success', 'Your form has been submitted successfully!');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
        ]);

        $patientId = $request->input('patient_id');

        $patient = Patient::findOrFail($patientId);

        $patient->delete();
        
        return redirect()->back()->with('success', 'Patient deleted successfully.');
    }
}
