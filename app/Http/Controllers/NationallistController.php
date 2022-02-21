<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NationallistController extends Controller
{
    public function index()
    {
        return view('nationallist');
    }
}
