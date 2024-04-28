<?php

namespace Database\Seeders;

use App\Models\Main_test;
use App\Models\Ray_test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Test_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ray_tests = [
            [
                'name' => 'Medical Analysis',
            ],
            [
                'name' => 'Medical x-ray',
            ]
        ];

        foreach ($ray_tests as $data) {
            Ray_test::create([
                'name' => $data['name']
            ]);
        }

        $MainTests = [
            [
                'name' => 'Haematology',
                'photo'=> 'images/Haematology.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Lipid Profile',
                'photo'=> 'images/lipid.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Blood Glucose',
                'photo'=> 'images/Blood.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Renal Profile',
                'photo'=> 'images/Renal.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Liver Profile',
                'photo'=> 'images/liver.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Cardiac Profile',
                'photo'=> 'images/Cardiac.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Virology',
                'photo'=> 'images/Virology.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Parasitology',
                'photo'=> 'images/Parasitology.png',
                'ray_test_id' => '2'
            ]
        ];

        foreach ($MainTests as $test) {
            Main_test::create([
                'name' => $test['name'],
                'photo' => $test['photo'],
                'ray_test_id' => $test['ray_test_id'],
            ]);
        }

        $tests = [
            [
                'name' => 'CBC',
                'photo' => 'images/CBC.png',
                'price' => 120,
                'main_tests_id' => 1,
            ],
            [
                'name' => 'Cholesterol',
                'photo' => 'images/Cholesterol.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
            [
                'name' => 'Triglyceride',
                'photo' => 'images/Triglyceride.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
            [
                'name' => 'HDL',
                'photo' => 'images/hdl.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
            [
                'name' => 'LDL',
                'photo' => 'images/ldl.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
            [
                'name' => 'HBA1C',
                'photo' => 'images/HBA1C.png',
                'price' => 150,
                'main_tests_id' => 3,
            ],
            [
                'name' => 'RBG',
                'photo' => 'images/RBG.png',
                'price' => 30,
                'main_tests_id' => 3,
            ],
            [
                'name' => 'FBG',
                'photo' => 'images/FBG.png',
                'price' => 30,
                'main_tests_id' => 3,
            ],
            [
                'name' => 'PPBG',
                'photo' => 'images/PPBG.png',
                'price' => 30,
                'main_tests_id' => 3,
            ],
            [
                'name' => 'Urea',
                'photo' => 'images/urea.png',
                'price' => 70,
                'main_tests_id' => 4,
            ],
            [
                'name' => 'Creatinine',
                'photo' => 'images/Creatinine.png',
                'price' => 70,
                'main_tests_id' => 4,
            ],
            [
                'name' => 'GOT',
                'photo' => 'images/GOT.png',
                'price' => 70,
                'main_tests_id' => 5,
            ],
            [
                'name' => 'GPT',
                'photo' => 'images/GPT.png',
                'price' => 70,
                'main_tests_id' => 5,
            ],
            [
                'name' => 'Troponin',
                'photo' => 'images/Troponin.png',
                'price' => 300,
                'main_tests_id' => 6,
            ],
            [
                'name' => 'CKMB ',
                'photo' => 'images/CKMB.png',
                'price' => 250,
                'main_tests_id' => 6,
            ],
            [
                'name' => 'HCV',
                'photo' => 'images/HCV.png',
                'price' => 100,
                'main_tests_id' => 7,
            ],
            [
                'name' => 'HBV',
                'photo' => 'images/HBV.png',
                'price' => 100,
                'main_tests_id' => 7,
            ],
            [
                'name' => 'HIV',
                'photo' => 'images/HIV.png',
                'price' => 130,
                'main_tests_id' => 7,
            ],
            [
                'name' => 'LDH',
                'photo' => 'images/LDH.png',
                'price' => 130,
                'main_tests_id' => 6,
            ],
            [
                'name' => 'Urine ',
                'photo' => 'images/Urine.png',
                'price' => 30,
                'main_tests_id' => 8,
            ],
            [
                'name' => 'Stool',
                'photo' => 'images/Stool.png',
                'price' => 130,
                'main_tests_id' => 8,
            ],
        ];

        foreach ($tests as $test) {
            \App\Models\Test::create([
                'name' => $test['name'],
                'photo' => $test['photo'],
                'price' => $test['price'],
                'main_tests_id' => $test['main_tests_id'],
            ]);
        }
    }
}
