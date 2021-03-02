<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['payment_id','player_id','player_email','amount','currency','payment_status'];
}
