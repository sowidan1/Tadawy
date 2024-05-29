<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ehr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class EhrController extends Controller
{

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


    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'patient_id' => 'required|exists:patients,id',
        'data' => 'required|mimes:pdf,doc,docx,xlx,xlsx,csv,jpeg,png,jpg,gif,svg',
    ]);

    // Debug: print all request data
    // dd($request->all());

    // Get all request data
    $requestData = $request->all();

    // Store the uploaded file and update the request data
    $requestData['data'] = $request->file('data')->store('uploads', 'public');

    // Create a new EHR record
    $uploadfile = Ehr::create([
        'patient_id' => $requestData['patient_id'],
        'path' => $requestData['data'],
        'name' => $request->file('data')->getClientOriginalName(),
    ]);

    // Return a JSON response with the uploaded file information
    return response()->json($uploadfile);
}




public function showFile($id)
{
    $uploadfile = Ehr::findOrFail($id);

    $file = storage_path('app/public/' . $uploadfile->path); // Updated to use 'path' instead of 'file'
    $mimeType = $this->getMimeType($file);

    if (!$mimeType) {
        return redirect()->back()->with('error', 'File type not supported');

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

    return response()->file($file, [
        'Content-Type' => $mimeType,
    ]);
}


    private function getMimeType($filePath)
{
    $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

    $mimeTypes = [
        'pdf' => 'application/pdf',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
    ];

    return $mimeTypes[$extension] ?? null;
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
