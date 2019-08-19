<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        return view('inbox.index');
    }

    public function create()
    {
        return view('inbox.create');
    }

    public function addcreate()
    {
        // return '1';
        return view('inbox.add');
    }

    public function addstore()
    {
        return '1';
        return view('inbox.add');
    }
}
