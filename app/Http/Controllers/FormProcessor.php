<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userform');
    }

}
