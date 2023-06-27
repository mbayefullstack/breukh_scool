<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'libelle', 'niveau_id'];

    //il y A au moins un niveau.
    public function niveau():BelongsTo
    {
        return $this->belongsTo(Niveau::class);
    }
}
