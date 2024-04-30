<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfantRequest;
use App\Models\Heart_rate;
use App\Models\Infant;
use App\Models\Temp;
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

    public function heart_rate(Request $request)
    {
        $data = $request->validate([
            'heart_rate' => 'required'
        ]);

        $infant = Heart_rate::create($data);

        $response = [
            'data' => $infant,
            'message' => 'Heart rate data stored successfully',
            'status' => 200
        ];

        return $response;
    }


    public function temp(Request $request)
    {
        $data = $request->validate([
            'temperature' => 'required',
            'humidity' => 'required',
        ]);

        $temperature = Temp::create($data);
        

        $response = [
            'data' => $temperature,
            'message' => 'Temperature and humidity data stored successfully',
            'status' => 200
        ];

        return $response;
    }

    public function getData(){

        $infant = Infant::first();

        if(!$infant){
            $response = [
                'data' => [],
                'message' => 'No infant data found',
                'status' => 404
            ];
    
            return $response;
        }else{
            $response = [
                'data' => $infant,
                'message' => 'Infant data fetched successfully',
                'status' => 200
            ];
    
            return $response;
        }
    
    }
    

}
