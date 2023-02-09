<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function indexBlog(){
        return view('blog.index');
    }
}
