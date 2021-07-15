<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Mail\SendNewMail;
use Illuminate\Auth\Access\AuthorizationException as AccessAuthorizationException;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Contracts\Auth\Access\AuthorizationException;
use Illuminate\Filesystem\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache as FacadesCache;


class CustomerController extends Controller

{

    public function index(){


        try {
           $this->authorize('list',Customer::class);
           $users = cache()->remember('key', 60*60*24, function () {
             return Auth::user();
           });
           $customer = cache()->remember('keyyyy', 60*60*24, function () {
            return Customer::all();
          });
           return view('customer',compact('users','customer'));
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
