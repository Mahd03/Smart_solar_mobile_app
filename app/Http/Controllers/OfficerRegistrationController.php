<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerRegistrationController extends Controller
{
    public function index()
    {
        return view('officerRegistration');
    }
}
