<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EleveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'last_name' => $this->last_name,
            'first_name'=> $this->first_name,
            'datedenaissance' => $this->datedenaissance,
            'lieudenaissance' => $this->lieudenaissance,
            'sexe' => $this->sexe,
            'profile' => (bool) $this->profile,
            // 'classe' => ClasseRessource::collection($this->classes)
        ];
    }
}
