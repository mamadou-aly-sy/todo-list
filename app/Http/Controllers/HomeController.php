<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function haj()
    {
        return view('index');
    }

    public function sy()
    {
        return view('page/index');
    }
}
