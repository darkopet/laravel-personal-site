<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('life.contactcreate');
    }

    public function create()
    {
        return view('life.contactcreate');
    }
}
