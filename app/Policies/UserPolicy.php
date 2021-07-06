<?php

namespace App\Policies;

use App\User;
use App\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list(User $user){
        return true;
    }

    public function view(User $user){
        return  true;
    }

    public function create(User $user){
        return  true;
    }

    public function update(User $user){
        return  true;
    }

    public function delete(User $user){
        return  true;
    }

}
