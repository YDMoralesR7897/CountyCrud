<?php

namespace App\Http\Resources;

use App\Http\Controllers\PaisController;
use Illuminate\Http\Resources\Json\JsonResource;
use App\providers\Pais;  

class countrycrudResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Nombre' => $this->nombre,
        'Capital' => $this->capital,
        'Codigo'=> $this->codigo,
        'Cantidadhabitantes' => $this->cantidadhabitantes,
        'Area' => $this->area, 
        ];
    }
};