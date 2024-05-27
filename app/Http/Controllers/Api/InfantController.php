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
    // Fetch and combine color sensor data
    $latestColorSensor = DB::table('color_sensors')
        ->select('color_sensors.color_sensor as result', DB::raw("'Color Sensor' as table_name"))
        ->latest('created_at')
        ->first();

    $colorSensorImage = DB::table('color_sensors')
        ->select('image')
        ->where('id', 1)
        ->first();

    $colorSensor = null;
    if ($latestColorSensor) {
        $colorSensor = [
            'result' => $latestColorSensor->result,
            'table_name' => $latestColorSensor->table_name,
            'image' => $colorSensorImage ? $colorSensorImage->image : null
        ];
    }

    // Fetch and combine heart rate data
    $latestHeartRate = DB::table('heart_rates')
        ->select('heart_rates.heart_rate as result', DB::raw("'Heart Rate' as table_name"))
        ->latest('created_at')
        ->first();

    $heartRateImage = DB::table('heart_rates')
        ->select('image')
        ->where('id', 1)
        ->first();

    $heartRate = null;
    if ($latestHeartRate) {
        $heartRate = [
            'result' => $latestHeartRate->result,
            'table_name' => $latestHeartRate->table_name,
            'image' => $heartRateImage ? $heartRateImage->image : null
        ];
    }

    // Fetch and combine temperature data
    $latestTemperature = DB::table('temps')
        ->select('temps.temperature as result', DB::raw("'Temperature' as table_name"))
        ->latest('created_at')
        ->first();

    $temperatureImage = DB::table('temps')
        ->select('image')
        ->where('id', 1)
        ->first();

    $temperature = null;
    if ($latestTemperature) {
        $temperature = [
            'result' => $latestTemperature->result,
            'table_name' => $latestTemperature->table_name,
            'image' => $temperatureImage ? $temperatureImage->image : null
        ];
    }

    // Fetch and combine humidity data
    $latestHumidity = DB::table('humidities')
        ->select('humidities.humidity as result', DB::raw("'Humidity' as table_name"))
        ->latest('created_at')
        ->first();

    $humidityImage = DB::table('humidities')
        ->select('image')
        ->where('id', 1)
        ->first();

    $humidity = null;
    if ($latestHumidity) {
        $humidity = [
            'result' => $latestHumidity->result,
            'table_name' => $latestHumidity->table_name,
            'image' => $humidityImage ? $humidityImage->image : null
        ];
    }

    // Combine all data into the response
    $response = [
        'color_sensor' => $colorSensor,
        'heart_rate' => $heartRate,
        'temperature' => $temperature,
        'humidity' => $humidity,
        'status' => 200
    ];

    return response()->json($response);
}


}
