<?php

namespace App\Console\Commands;

use App\Customer;
use Illuminate\Console\Command;

class CustomerDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete the last customer';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Customer::orderBy('id','desc')->first()->delete();

    }
}
