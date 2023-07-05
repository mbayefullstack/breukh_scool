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
            ['libelle'=> 'CE1 ','niveau_id'=>'1'],
            ['libelle'=> 'CE2 ','niveau_id'=>'1'],
            ['libelle'=> 'CM1 ','niveau_id'=>'1'],
            ['libelle'=> 'CM2 ','niveau_id'=>'1'],
            ['libelle'=> '6 ème ','niveau_id'=>'2'],
            ['libelle'=> '5 ème ','niveau_id'=>'2'],
            ['libelle'=> '4 ème ','niveau_id'=>'2'],
            ['libelle'=> '3 ème','niveau_id'=>'2'],
        ];
        Classe::insert($data);
    }
}
