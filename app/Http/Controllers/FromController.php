<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromController extends Controller
{
    public function index()
    {
        return view('from');
    }
}
