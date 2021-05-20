<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class ApiController extends Controller
{
    public function __invoke()
    {

        $data = Customer::all()->groupBy('id','desc')->first();


        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);
    }


}

