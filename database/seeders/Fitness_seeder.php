<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Fitness_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fits = [
            ['name' => 'Back', 'photo' => 'images/back.jpeg'],
            ['name' => 'Arm', 'photo' => 'images/arm.jpeg'],
            ['name' => 'Chest', 'photo' => 'images/Chest.jpg'],
            ['name' => 'Leg', 'photo' => 'images/leg.jpeg'],
            ['name' => 'Six pack', 'photo' => 'images/six_pack.jpeg']];

        foreach ($fits as $fit) {
            \App\Models\Fit::create($fit);
        }

        $fit_shows= [
            [
                'photo' => 'images/back/Across-Chest-Shoulder-Stretch.gif',
                'fit_id' => 1
            ],
            [
                'photo' => 'images/back/Shoulder-Stretch-behind.gif',
                'fit_id' => 1
            ],
            [
                'photo' => 'images/back/Standing-Reach-Up-Back-rotation-Stretch.gif',
                'fit_id' => 1
            ],
            [
                'photo' => 'images/back/Standing-Side-Bend-Stretch.gif',
                'fit_id' => 1
            ],
            [
                'photo' => 'images/back/Stretch-With-Towel.gif',
                'fit_id' => 1
            ],
            [
                'photo' => 'images/back/Upper-Back-Stretch.gif',
                'fit_id' => 1
            ],
            [
                'photo' => 'images/arm/Concentration-Curl.gif',
                'fit_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Curl.gif',
                'fit_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Preacher-Curl.gif',
                'fit_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Triceps-Extension.gif',
                'fit_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Wrist-Curl.gif',
                'fit_id' => 2
            ],
            [
                'photo' => 'images/arm/Hammer-Curl.gif',
                'fit_id' => 2
            ],
            [
                'photo' => 'images/chest/Barbell-Bench-Press.gif',
                'fit_id' => 3
            ],
            [
                'photo' => 'images/chest/Cable-Upper-Chest-Crossovers.gif',
                'fit_id' => 3
            ],
            [
                'photo' => 'images/chest/Dumbbell-Pullover.gif',
                'fit_id' => 3
            ],
            [
                'photo' => 'images/chest/Medicine-Ball-Overhead-Throw.gif',
                'fit_id' => 3
            ],
            [
                'photo' => 'images/chest/Pec-Deck-Fly.gif',
                'fit_id' => 3
            ],
            [
                'photo' => 'images/chest/Standing-Medicine-Ball-Chest-Pass.gif',
                'fit_id' => 3
            ],
            [
                'photo' => 'images/leg/5-Dot-drills-agility-exercise.gif',
                'fit_id' => 4
            ],
            [
                'photo' => 'images/leg/Depth-Jump-to-Hurdle-Hop.gif',
                'fit_id' => 4
            ],
            [
                'photo' => 'images/leg/Dumbbell-Squat.gif',
                'fit_id' => 4
            ],
            [
                'photo' => 'images/leg/High-Knee-Lunge-on-Bosu-Ball.gif',
                'fit_id' => 4
            ],
            [
                'photo' => 'images/leg/power-lunge.gif',
                'fit_id' => 4
            ],
            [
                'photo' => 'images/leg/Standing-Leg-Circles.gif',
                'fit_id' => 4
            ],
            [
                'photo' => 'images/six_back/Cross-Crunch.gif',
                'fit_id' => 5
            ],
            [
                'photo' => 'images/six_back/Crunch.gif',
                'fit_id' => 5
            ],
            [
                'photo' => 'images/six_back/Leg-Raise-Dragon-Flag.gif',
                'fit_id' => 5
            ],
            [
                'photo' => 'images/six_back/Russian-Twist.gif',
                'fit_id' => 5
            ],
            [
                'photo' => 'images/six_back/Seated-Bench-Leg-Pull-in.gif',
                'fit_id' => 5
            ],
            [
                'photo' => 'images/six_back/Standing-Cable-Crunch.gif',
                'fit_id' => 5
            ],
        ];

        foreach ($fit_shows as $fit_show) {
            \App\Models\Fit_show::create($fit_show);
        }

        $fit_programs = [
            [
                'name' => 'Bodyweight squat',
                'photo' => 'images/bodyweight-squat.gif',
            ],
            [
                'name' => 'Chest dip movement',
                'photo' => 'images/chest-dip-movement.gif',
            ],
            [
                'name' => 'Chin ups',
                'photo' => 'images/chin-ups.gif',
            ],
            [
                'name' => 'Crunch',
                'photo' => 'images/crunch.gif',
            ],
            [
                'name' => 'Inverted row',
                'photo' => 'images/inverted-row.gif',
            ],
            [
                'name' => 'Pull up',
                'photo' => 'images/pull-up.gif',
            ],
            [
                'name' => 'Push up',
                'photo' => 'images/push-up.gif',
            ],
            [
                'name' => 'Tricep dips',
                'photo' => 'images/tricep-dips.gif',
            ],
        ];

        foreach ($fit_programs as $fit_program) {
            \App\Models\Fit_program::create($fit_program);
        }

        $fit_programs_details = [
            [
                'name' => 'Bodyweight squat',
                'photo_gif' => 'images/bodyweight-squat.gif',
                'photo_png' => 'images/squat.png',
                'description' => 'Stand with your feet shoulder-width apart. Lower your body by bending your knees and pushing your hips back as if you are sitting down.Keep your back straight and chest up. Lower down until your thighs are parallel to the ground or as far as comfortable. Push through your heels to return to the starting position.',
                'fit_program_id' => '1',

            ],
            [
                'name' => 'Chest dip movement',
                'photo_gif' => 'images/chest-dip-movement.gif',
                'photo_png' => 'images/chest-dip-movemen.png',
                'description' => 'Use parallel bars or sturdy dip bars. Grip the bars with your palms facing each other. Lower your body by bending your elbows until your upper arms are parallel to the ground. Keep your body upright and avoid leaning forward too much. Push through your palms to return to the starting position.',
                'fit_program_id' => '2',
            ],
            [
                'name' => 'Chin ups',
                'photo_gif' => 'images/chin-ups.gif',
                'photo_png' => 'images/chin-ups.png',
                'description' => 'Hang from a pull-up bar with your palms facing towards you. Pull your body up towards the bar by bending your elbows. Keep your chest up and try to touch your chin to the bar. Lower your body back down with control.',
                'fit_program_id' => '3',
            ],
            [
                'name' => 'Crunch',
                'photo_gif' => 'images/crunch.gif',
                'photo_png' => 'images/crunch.png',
                'description' => 'Lie on your back with your knees bent and feet flat on the ground. Place your hands behind your head or across your chest. Lift your shoulders towards the ceiling using your abdominal muscles. Avoid pulling on your neck and focus on contracting your abs. Lower your upper body back down with control.',
                'fit_program_id' => '4',
            ],
            [
                'name' => 'Inverted row',
                'photo_gif' => 'images/inverted-row.gif',
                'photo_png' => 'images/bodyweight-squat.gif',
                'description' => 'Set up a bar at waist height. Lie under the bar, grab it with an overhand grip, and keep your body straight. Pull your chest towards the bar by squeezing your shoulder blades together. Lower your body back down with control.',
                'fit_program_id' => '5',
            ],
            [
                'name' => 'Pull up',
                'photo_gif' => 'images/pull-up.gif',
                'photo_png' => 'images/pull-up.png',
                'description' => 'Hang from a pull-up bar with your palms facing away. Pull your body up towards the bar by bending your elbows. Keep your chest up and engage your back muscles. Lower your body back down with control.',
                'fit_program_id' => '6',
            ],
            [
                'name' => 'Push up',
                'photo_gif' => 'images/push-up.gif',
                'photo_png' => 'images/push-up.png',
                'description' => 'Start in a plank position with your hands slightly wider than shoulder-width apart. Lower your body towards the ground by bending your elbows. Keep your body in a straight line and lower until your chest is close to the ground. Push through your palms to return to the starting position.',
                'fit_program_id' => '7',
            ],
            [
                'name' => 'Tricep dips',
                'photo_gif' => 'images/tricep-dips.gif',
                'photo_png' => 'images/Tricep-dips.png',
                'description' => 'Use parallel bars or a sturdy surface behind you. Grip the bars with your palms facing downward. Lower your body by bending your elbows, keeping them close to your body. Push through your palms to return to the starting position, focusing on your triceps.',
                'fit_program_id' => '8',
            ],
        ];

        foreach ($fit_programs_details as $fit_program) {
            \App\Models\Fit_program_details::create($fit_program);
        }
    }
}
