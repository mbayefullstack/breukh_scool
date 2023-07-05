<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Traits\JoinQueryParams;
use Illuminate\Http\Resources\Json\JsonResource;

class NiveauRessource extends JsonResource
{

    use JoinQueryParams;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $this->test();
        return [
            'libelle'=> $this->libelle,
            'classe' => ClasseRessource::collection($this->classes)
        ];
    }
}
