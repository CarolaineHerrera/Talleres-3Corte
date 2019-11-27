<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibroRequest;
use App\Models\Libro;

class LibroController extends Controller
{

    public function store(LibroRequest $request)
    {

        $libro = Libro::create($request->all());
        return $libro;

    }
   

}
