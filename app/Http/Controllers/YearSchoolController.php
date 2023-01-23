<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearSchoolController extends Controller
{
    public function index(){
        return view('settings.index');
    }
}
