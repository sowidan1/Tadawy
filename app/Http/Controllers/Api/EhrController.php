<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ehr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class EhrController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'data' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);

        // Prepare the file for upload
        $file = $request->file('data');
        $filePath = $file->getPathname();
        $fileName = $file->getClientOriginalName();
        $fileMimeType = $file->getMimeType();

        try {
            // Upload the file to the external server with increased timeout
            $response = Http::timeout(30)->attach(
                'data', file_get_contents($filePath), $fileName
            )->post('https://tadawy-production.up.railway.app/ehr');

            if ($response->successful()) {
                // Assume the response contains the URL to the uploaded file
                $dataUrl = $response->json()['url'];

                // Create the EHR entry with the URL path
                $file = Ehr::create([
                    'name' => $fileName,
                    'path' => $dataUrl,
                    'patient_id' => $request->patient_id,
                ]);

                $response = [
                    'message' => 'EHR created',
                    'data' => $file,
                ];

                return response($response, 201);
            } else {
                return response(['message' => 'Failed to upload file'], 500);
            }
        } catch (\Exception $e) {
            return response(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'patient_id' => 'required|exists:patients,id',
    //         'data' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
    //     ]);

    //     $data = $request->file('data')->store('ehr');

    //     $file = Ehr::create([
    //         'name' => $request->file('data')->getClientOriginalName(),
    //         'path' => $data,
    //         'patient_id' => $request->patient_id,
    //     ]);

    //     $response = [
    //         'message' => 'EHR created',
    //         'data' => $file,
    //     ];

    //     return response($response, 201);
    // }

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
