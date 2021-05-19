<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index(){

       return view('customer');
    }




    public function store(Request $request){

        $customerData = $request->all();

        Mail::to('verderosamircowork@gmail.com')->send(new SendNewMail());

        $newCustomer = new Customer;
        $newCustomer->fill($customerData);
        $newCustomer->save();


        return view('mail.checkout');
    }


}
