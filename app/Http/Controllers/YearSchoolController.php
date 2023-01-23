<?php

namespace App\Http\Controllers;

class YearSchoolController extends Controller
{

    public function index()
    {
        return view('settings.index');
    }

    public function create()
    {
        return view('settings.create');
    }
}
