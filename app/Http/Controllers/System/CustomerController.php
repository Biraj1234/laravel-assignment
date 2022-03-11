<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    //Assingnment 2
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('onlyMiddleware')->only('index');
        $this->middleware('exceptMiddleware')->except('destroy');
    }
    public function index(Request $request)
    {
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
