<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $table = 'capitulos';
    
    protected $fillable = [
        'libro_id',
        'sipnosis'
    ];
    
    public function libro()
    {
        return $this->belongsTo('App\Models\Libro');
    }
}
