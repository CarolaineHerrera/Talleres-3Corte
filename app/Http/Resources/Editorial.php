<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Editorial extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'libros' => Libro::collection($this->libros),
            'capitulos' => $this->capitulos,
        ];
    }
}
