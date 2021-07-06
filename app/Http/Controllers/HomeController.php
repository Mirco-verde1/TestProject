<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Illuminate\Auth\Access\AuthorizationException as AccessAuthorizationException;
use Illuminate\Support\Facades\Log;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $this->authorize('list',User::class);
            return view('customer');
         } catch (AccessAuthorizationException $e) {
             Log::channel('admin_gui')->info($e->getMessage());
             return abort(403,trans('errors.denied'));
         }
    }
}
