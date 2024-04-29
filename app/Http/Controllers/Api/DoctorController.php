<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::paginate(10);

        $response = [
            'doctors' => $doctors,
            'message' => 'Doctors fetched successfully',
            'status' => 200
        ];
        return $response;
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['error' => 'Doctor not found'], 404);
        }

        $reponse = [
            'doctor' => $doctor,
            'message' => 'Doctor fetched successfully',
            'status' => 200
        ];
        return $reponse;
    }

    public function showPatients($id)
    {
        $dpatients = Patient::where('doctor_id', $id)->get();

        if (!$dpatients) {
            return response()->json(['error' => 'Patients not found'], 404);
        }

        return $dpatients;
    }

    public function patients()
    {
        $patients = Patient::select('name', 'photo')->get();

        if (!$patients) {
            return response()->json(['error' => 'Patients not found'], 404);
        }

        return $patients;
    }

}
