<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfantRequest;
use App\Models\Infant;
use Illuminate\Http\Request;

class InfantController extends Controller
{
    public function store(InfantRequest $request)
    {
        $data = $request->validated();

        $infant = Infant::create($data);

        $response = [
            'data' => $infant,
            'message' => 'Infant data stored successfully',
            'status' => 200
        ];

        return $response;
    }
}
