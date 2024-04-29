<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(AppointmentRequest $request)
    {
        $appointment = Appointment::create($request->all());

        return response()->json($appointment, 201);
    }

    public function all_patient($id_doctor)
    {
        $appointment = Appointment::where('doctor_id', $id_doctor)->get();

        return response()->json($appointment, 200);
    }

    public function all_doctor($id_patient)
    {
        $appointment = Appointment::where('patient_id', $id_patient)->get();

        return response()->json($appointment, 200);
    }


}
