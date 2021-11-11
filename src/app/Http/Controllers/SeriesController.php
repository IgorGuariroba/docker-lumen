<?php

namespace App\Http\Controllers;

use App\Serie;
use Laravel\Lumen\Http\Request;
use Laravel\Lumen\Routing\Controller as ControllerAlias;

class SeriesController extends ControllerAlias
{
    public function index()
    {
        return Serie::all();
    }

    public function store(Request $request)
    {
        dd($_SERVER);
        var_dump($_POST);
        dd($request);

        return response()
            ->json(Serie::create(['nome' => $request->name]), 201);
    }
}
