<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function profile()
    {
        return view('profile');    
}

public function blog()
    {
        return view('blog');    
    }

    public function service(){
        return view('service');
    }

}