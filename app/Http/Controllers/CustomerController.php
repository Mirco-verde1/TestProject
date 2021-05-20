<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\VarDumper\VarDumper;

class CustomerController extends Controller
{
    public function index(){

       return view('customer');
    }




    public function store(Request $request){

        $customerInput = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'message' => 'required'

        ]);

        $customerData = $request->all();
        $customer = new Customer;
        $customer->fill($customerData);
        $customer->save();
        Mail::to('verderosamircowork@gmail.com')->send(new SendNewMail($customer));
        return view('mail.result-email',compact('customer'));
    }



}
