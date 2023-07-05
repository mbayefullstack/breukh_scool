<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;
use App\Http\Resources\EleveResource;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EleveResource::collection(Eleve::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $eleve = Eleve::create([
            "last_name" => $request->nom,
            "first_name" => $request->prenom,
            "datedenaissance" => $request->date_naissance,
            "lieudenaissance" => $request->lieu,
            "sexe" => $request->sexe,
            "profile" => $request->profil,
            "niveau_id" => $request->classe_id,
            "classe_id" => $request->classe_id,
            "etat" => $request->etat,
            "numero" => $request->numero
        ]);
        

        



        if ($eleve) {
            // L'élève est associé à une classe existante
            Inscription::create([
                "date_inscription" => now(),
                "annee_scolaire_id" => 1, // Remplacez par l'ID de l'année scolaire appropriée
                "classe_id" => $request->classe_id,
                "eleve_id" => $eleve->id
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return EleveResource::make($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
