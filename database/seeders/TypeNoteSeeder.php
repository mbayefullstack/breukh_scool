<?php

namespace Database\Seeders;

use App\Models\TypeNote;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['libelle'=> 'Examen'],
            ['libelle'=> 'Ressource']
        ];
        TypeNote::insert($data);
    }
}
