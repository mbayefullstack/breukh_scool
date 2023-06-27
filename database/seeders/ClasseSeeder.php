<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['libelle'=> 'CI ','niveau_id'=>'1'],
            ['libelle'=> 'CP ','niveau_id'=>'1'],
            ['libelle'=> 'CE1 ','niveau_id'=>'1']
        ];
        Classe::insert($data);
    }
}
