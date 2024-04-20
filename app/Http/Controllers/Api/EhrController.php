<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ehr;
use Illuminate\Http\Request;

class EhrController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'data' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);

        $data = $request->file('data')->store('ehr');

        $file = Ehr::create([
            'name' => $request->file('data')->getClientOriginalName(),
            'path' => $data,
            'patient_id' => $request->patient_id,
        ]);

        $response = [
            'message' => 'EHR created',
            'data' => $file,
        ];

        return response($response, 201);
    }

    public function download($id)
    {
        $file = Ehr::findOrFail($id);

        return response()->download(storage_path('app/' . $file->path));
    }

    public function showEhrByPatientId($patient_id)
    {
        $ehr = Ehr::where('patient_id', $patient_id)->get();

        return response()->json($ehr);
        
    }
}
