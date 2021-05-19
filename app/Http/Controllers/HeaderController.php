<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function info(){
        return view('header-info.about-us');
    }

    public function contact(){
        return view('header-info.contact');
    }


    public function services(){
        return view('header-info.services');
    }
}
