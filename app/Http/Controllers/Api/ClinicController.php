<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\Doctor;

class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::select('id', 'name', 'photo','description')->get();

        return $clinics;
    }

    public function getClinicDetails($clinicId)
    {

        $clinic = Clinic::find($clinicId);

        if (!$clinic) {
            return response()->json(['error' => 'Clinic not found'], 404);
        }

        return response()->json([
            
            $doctors = Doctor::where('clinic_id', $clinicId)
                ->get([
                    'id',
                    'name',
                    'photo',
                    'specialty'
                ])
        ]);

        return response()->json($doctors);
    }
}
