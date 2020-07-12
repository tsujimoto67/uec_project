<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tsujiController extends Controller
{
    public function index()
    {
        return view('tsuji.tsuji_index');
    }
}
