<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditorialRequest;
use App\Models\Editorial;

class EditorialController extends Controller
{

    public function index()
    {
        return csrf_token();
    }
   
    public function store(EditorialRequest $request)
    {

        $editorial = Editorial::create($request->all());
        return $editorial;

    }
}
