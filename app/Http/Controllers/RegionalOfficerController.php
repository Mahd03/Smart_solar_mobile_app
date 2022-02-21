<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionalOfficerController extends Controller
{
    public function index()
    {
        return view('regionalOfficers');
    }
}
