<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //using invoke constructor method
    public function __invoke()
    {
        return view('invoke.index');
    }
}
