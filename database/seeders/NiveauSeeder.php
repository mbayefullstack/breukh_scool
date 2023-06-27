<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['libelle' =>'ELEMENTAIRE'],
            ['libelle' =>'SECONDAIRE'],
            ['libelle' =>'ELEMENTAIRE']
            ];
            Niveau::insert($data);
    }
}
