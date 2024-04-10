<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorLoginRequest;
use App\Http\Requests\PatientLoginRequest;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function doctorLogin(DoctorLoginRequest $request)
    {
        $fields = $request->validated();

        $doctor = Doctor::where('email', $fields['email'])->first();

        if (!$doctor || !Hash::check($fields['password'], $doctor->password)) {
            return response([
                'message' => 'Invalid Email or Password'
            ], 401);
        }

        $token = $doctor->createToken('myAppToken')->plainTextToken;

        $response = [
            'message' => 'Doctor logged in successfully',
            'doctor' => $doctor,
            'token' => $token,
            'status' => '201'
        ];

        return response($response);
    }

    public function patientLogin(PatientLoginRequest $request)
    {
        $fields = $request->validated();

        $patient = Patient::where('email', $fields['email'])->first();

        if (!$patient || !Hash::check($fields['password'], $patient->password)) {
            return response([
                'message' => 'Invalid Email or Password'
            ], 401);
        }

        $token = $patient->createToken('myAppToken')->plainTextToken;

        $response = [
            'message' => 'Patient logged in successfully',
            'patient' => $patient,
            'token' => $token,
            'status' => '201'
        ];

        return response($response);
    }

    public function logout(Request $request)
    {
        if ($request->user()->currentAccessToken()->delete()) {
            return response()->json([
                'message' => 'Successfully logged out'
            ]);
        }
    }
}
