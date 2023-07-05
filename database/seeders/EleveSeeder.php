<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'last_name' => 'MBAYE',
            'first_name' => 'Mouhamadou Moustapha',
            'datedenaissance' => '2000-10-20',
            'lieudenaissance' => 'Dakar',
            'profile' => 0,
            'sexe'=> 'M',
            'classe_id'=> 1,
            'niveau_id'=>1,
            'etat' => true,
            'numero' => 1
        ],
        [
            'last_name' => 'MANGA',
            'first_name' => 'Fatou',
            'datedenaissance' => '2005-05-18',
            'lieudenaissance' => 'Dakar',
            'profile' => 1,
            'sexe'=> 'F',
            'classe_id'=> 2,
            'niveau_id'=>2,
            'etat' => true,
            'numero' => 2
        ]
        ];
        Eleve::insert($data);
    }
}
