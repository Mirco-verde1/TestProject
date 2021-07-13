<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function processQueue(){

        $emailjob = new SendWelcomeEmail();
        dispatch($emailjob);
        echo('Email sended');
    }
}
