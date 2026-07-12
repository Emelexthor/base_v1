<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classe;
class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Classe::where('name', 'Aula 1')->first()) {
            Classe::create([
                'name' => 'Aula 1',
                'description' => 'Descrição da Aula 1',
                'order_classe'=> 1,
                'course_id' => 1,
            ]);
        }
    }
}
