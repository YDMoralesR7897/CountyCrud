<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class countrycrudResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $paises
     * @return array
     */
    public function toArray($paises)
    {
        return [
            'Nombre' => $paises->nombre,
            'Capital' => $paises->capital,
            'Codigo' => $paises->codigo,
            'Cantidadhabitantes' => $paises->cantidadhabitantes,
            'Area' => $paises->area
        ];
    }
};
