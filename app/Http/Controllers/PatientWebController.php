<?php

namespace App\Http\Controllers;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Requests\StorePatientRequest;
use App\Models\Appointment;
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

        $Appointment = Appointment::where('doctor_id', $doctor_id)->get();

        $clinics = Clinic::where('id', $Appointment->pluck('clinic_id'));

        $patients = Patient::whereIn('id', $Appointment->pluck('patient_id'))->get();

        return view('patient', compact('patients', 'clinics', 'Appointment'));
    }
}
