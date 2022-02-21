<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientlistController extends Controller
{
    public function index()
    {
        return view('patientlist');
    }
}
