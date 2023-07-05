<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        "date_inscription",
        "annee_scolaire_id",
        "classe_id",
        "eleve_id"
    ];
}
