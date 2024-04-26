<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Requests\StorePatientRequest;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientWebController extends Controller
{

    public function store(StorePatientRequest $request)
    {
        $request->validated();

        $id = IdGenerator::generate(['table' => 'patients', 'length' => 8, 'prefix' => date('ym')]);

        Patient::create([
            'id' => $id,
            'name' => $request->Full_Name,
            'photo  ' => $request->photo,
            'email' => $request->email,
            'password' => encrypt($request->password),
            'phone' => $request->phoneNumber,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'doctor_id' => $request->doctor_id,
            'clinic_id' => $request->clinic_id,
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

    public function show(Request $request , $doctor_id)
    {

        $patients = Patient::where('doctor_id', $doctor_id)->paginate(10);

        return view('patient', compact('patients'));
    }
}
