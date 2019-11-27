<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'descripcion',
        'editorial_id',
    ];

    public function capitulos()
    {
        return $this->hasMany('App\Models\Capitulo');
    }

    public function editorial()
    {
        return $this->belongsTo('App\Models\Editorial');
    }

}
