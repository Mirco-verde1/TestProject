<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Mail\SendNewMail;
use Illuminate\Auth\Access\AuthorizationException as AccessAuthorizationException;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Contracts\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller

{

    public function index(){


        try {
           $this->authorize('list',Customer::class);
           return view('customer');
        } catch (AccessAuthorizationException $e) {
            Log::channel('admin_gui')->info($e->getMessage());
            return abort(403,trans('errors.denied'));
        }

    }




    public function store(Request $request){

        $customerInput = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'message' => 'required',
            'phone' => 'required',

        ]);

        $customerData = $request->all();
        $customer = new Customer;
        $customer->fill($customerData);
        $customer->save();
        Mail::to('verderosamircowork@gmail.com')->send(new SendNewMail($customer));
        session()->flash('success', 'Richiesta inviata correttamente');
        return view('mail.result-email',compact('customer'));
    }



}
