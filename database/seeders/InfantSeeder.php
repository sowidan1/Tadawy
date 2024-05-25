<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colorSensor = [
            'image' => 'images/infant/baby.gif',
        ];

        $heart_rate = [
            'image' => 'images/infant/heartRate.gif',
        ];

        $temperature = [
            'image' => 'images/infant/thermometer.gif',
        ];

        $humidity = [
            'image' => 'images/infant/Humidity.gif',
        ];

        \App\Models\Color_sensor::create($colorSensor);
        \App\Models\Heart_rate::create($heart_rate);
        \App\Models\Temp::create($temperature);
        \App\Models\Humidity::create($humidity);
    }
}
