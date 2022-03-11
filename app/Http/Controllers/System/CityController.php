<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        dd("This is a city's index method");
    }


    public function create()
    {
        dd('This is a create method');
    }

    public function store(Request $request)
    {
        dd('This is a store method');
    }


    public function show($id)
    {

        dd('This a show method of id: ' . $id);
    }

    public function edit($id)
    {
        dd('This a edit method of id: ' . $id);
    }

    public function update(Request $request, $id)
    {
        dd('This an update method of id: ' . $id);
    }


    public function destroy($id)
    {
        dd('This a destroy method of id: ' . $id);
    }
}
