<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if(!Course::where('name', 'curso de laraavel- t2')->first()) {
            Course::create([
                'name' => "curso de laraavel- t2",

            ]);
        }
                if(!Course::where('name', 'curso de laraavel- t2')->first()) {
            Course::create([
                'name' => "curso de laraavel- t2",

            ]);
        }

    }
}
