<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Http\Resources\NiveauRessource;
use App\Http\Requests\StoreNiveauRequest;
use App\Http\Requests\UpdateNiveauRequest;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $affiche = Niveau::all();
        return NiveauRessource::collection($affiche);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function find()
    {
        $affiche = Niveau::all();
        return NiveauRessource::find($id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNiveauRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Niveau $niveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Niveau $niveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNiveauRequest $request, Niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Niveau $niveau)
    {
        //
    }
}
