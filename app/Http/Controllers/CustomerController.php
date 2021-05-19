<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){

       return view('customer');
    }




    public function store(Request $request){

        $customerData = $request->all();

        $newCustomer = new Customer;
        $newCustomer->fill($customerData);
        $newCustomer->save();

        return view('checkout');
    }


}
