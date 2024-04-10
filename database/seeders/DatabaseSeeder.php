<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\User;
use App\Models\Xray;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Event\Code\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            Fitness_seeder::class,
            Clinic_seeder::class,
            User_seeder::class,
            Test_seeder::class,
            Xray_seeder::class,
        ]);
    }
}
