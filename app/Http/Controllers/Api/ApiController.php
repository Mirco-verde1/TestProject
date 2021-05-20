<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function __invoke()
    {

        $data = DB::table('customers')->orderBy('id', 'desc')->get();


        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);
    }


}

