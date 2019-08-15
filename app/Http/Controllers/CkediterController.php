<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CkediterController extends Controller
{
    public function index()
    {
        return view('ckediter');
    }
}
