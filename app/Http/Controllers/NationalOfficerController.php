<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NationalOfficerController extends Controller
{
    public function index()
    {
        return view('nationalOfficers');
    }
}
