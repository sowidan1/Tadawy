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
            
        'file' => 'required|file|max:1024',
        'accepted'
    ]);

    $file = $request->file('file')->store('ehr');

    $file = Ehr::create([
        'name' => $request->file('file')->getClientOriginalName(),
        'path' => $file,
    ]);

    return response()->json([
        'path' => $file
    ]);
    }
}
