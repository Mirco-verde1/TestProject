<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Customer extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'surname', 'email', 'phone','message',
    ];
}
