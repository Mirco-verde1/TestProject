<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class HeaderController extends Controller
{
    public function info(){
        $value = Cache::get('key');
        return view('header-info.about-us');
    }

    public function contact(){
        return view('header-info.contact');
    }


    public function services(){
        return view('header-info.services');
    }
}
