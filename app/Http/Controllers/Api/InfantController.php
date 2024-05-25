<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorSensorRequest;
use App\Models\Color_sensor;
use App\Models\Heart_rate;
use App\Models\Humidity;
use App\Models\Infant;
use App\Models\Temp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfantController extends Controller
{
    public function colorSensor(ColorSensorRequest $request)
    {
        $data = $request->validated();

        $colorSensor = Color_sensor::create($data);

        $response = [
            'data' => $colorSensor,
            'message' => 'Color Sensor data stored successfully',
            'status' => 200
        ];

        return $response;
    }

    public function heartRate(Request $request)
    {
        $data = $request->validate([
            'heart_rate' => 'required'
        ]);
        $heartRate = Heart_rate::create($data);
        $response = [
            'data' => $heartRate,
            'message' => 'Heart rate data stored successfully',
            'status' => 200
        ];

        return $response;
    }

    public function temperature(Request $request)
    {
        $data = $request->validate([
            'temperature' => 'required',
        ]);
        $temperature = Temp::create($data);
        $response = [
            'data' => $temperature,
            'message' => 'Temperature data stored successfully',
            'status' => 200
        ];

        return $response;
    }

    public function humidity(Request $request)
    {
        $data = $request->validate([
            'humidity' => 'required',
        ]);
        $humidity = Humidity::create($data);
        $response = [
            'data' => $humidity,
            'message' => 'Humidity data stored successfully',
            'status' => 200
        ];

        return $response;
    }

    public function index()
    {
        $colorSensor = DB::table('color_sensors')
            ->select('color_sensors.image', 'color_sensors.color_sensor', DB::raw("'Color Sensor' as table_name"))
            ->latest()
            ->first();
        $heartRate = DB::table('heart_rates')
            ->select('heart_rates.heart_rate', 'heart_rates.image', DB::raw("'Heart Rate' as table_name"))
            ->latest()
            ->first();

        $temperature = DB::table('temps')
            ->select('temps.temperature', 'temps.image', DB::raw("'temperature' as table_name"))
            ->latest()
            ->first();

        $humidity = DB::table('humidities')
            ->select('humidities.humidity', 'humidities.image', DB::raw("'humidity' as table_name"))
            ->latest()
            ->first();

        $response = [
            'color_sensor' => $colorSensor,
            'heart_rate' => $heartRate,
            'temperature' => $temperature,
            'humidity' => $humidity,
            'status' => 200
        ];

        return $response;
    }
}
