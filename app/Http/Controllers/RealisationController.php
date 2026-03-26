<?php

namespace App\Http\Controllers;

class RealisationController extends Controller
{
    public function index()
    {
        return view('realisation');
    }

    public function show()
    {
        return view('realisation-detail');
    }
}
