<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\Doctor;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::select('id', 'name', 'photo')->get();

        return $clinics;
    }

    public function getClinicDetails($clinicId)
    {

        $clinic = Clinic::find($clinicId);

        if (!$clinic) {
            return response()->json(['error' => 'Clinic not found'], 404);
        }

        return response()->json([
            'id' => $clinic->id,
            'name' => $clinic->name,
            'description' => $clinic->description,
            'photo' => $clinic->photo,
            'doctors' => Doctor::where('clinic_id', $clinicId)
                ->get([
                    'id',
                    'name',
                    'photo',
                    'specialty'
                ])
        ]);
    }
}
