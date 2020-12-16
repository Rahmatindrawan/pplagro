<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecomController extends Controller
{
    public function index()
    {
        return view('recom.index');
    }
}
