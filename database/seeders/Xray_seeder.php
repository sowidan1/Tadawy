<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Xray_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $xrays = [
            [
                'name' => 'Brain CT Scan',
                'photo' => 'images/Brain-CT.png',
                'ray_test_id' => 2,
                'price' => '200'
            ],
            [
                'name' => 'Chest CT Scan',
                'photo' => 'images/Chest-CT.png',
                'ray_test_id' => 2,
                'price' => '320'
            ],
            [
                'name' => 'Sinuses CT Scan',
                'photo' => 'images/CT-Sinuses.png',
                'ray_test_id' => 2,
                'price' => '230'
            ],
            [
                'name' => 'CB CT Scan',
                'photo' => 'images/CB-CT.png',
                'ray_test_id' => 2,
                'price' => '320'
            ],
            [
                'name' => 'Abdominal and Pelvic CT scan',
                'photo' => 'images/Abdominal-and-Pelvic-CT.png',
                'ray_test_id' => 2,
                'price' => '900'
            ],
            [
                'name' => 'Liver CT scan',
                'photo' => 'images/Liver-CT.png',
                'ray_test_id' => 2,
                'price' => '900'
            ],
            [
                'name' => 'Ear CT scan',
                'photo' => 'images/Ear-CT.png',
                'ray_test_id' => 2,
                'price' => '230'
            ]
        ];

        foreach ($xrays as $xray) {
            \App\Models\Xray::create($xray);
        }
    }
}
