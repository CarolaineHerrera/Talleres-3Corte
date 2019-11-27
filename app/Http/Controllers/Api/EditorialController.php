<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Editorial;
use App\Models\Libro;
use App\Http\Resources\Editorial as EditorialResource;
use App\Http\Resources\Libro as LibroResource;

class EditorialController extends Controller
{
    public function index()
    {
        $editoriales = Editorial::all();

        return EditorialResource::collection($editoriales);
    }

    public function show($id)
    {
        $libro = Libro::find($id);
        return new LibroResource($libro);
    }
}
