<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class UnitController extends Controller
{
    public function index()
    {
        return view('client.elements.unit.index');
    }

    public function detail()
    {
        return view('client.elements.unit.detail');
    }
}
