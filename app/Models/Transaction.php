<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'code',
        'users_id',
        'insurance_price',
        'shipping_price',
        'transaction_status',
        'total_price',
    ];
}