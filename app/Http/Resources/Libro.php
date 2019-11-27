<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Libro extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'editorial_id' => $this->editorial,
        ];
    }
}
