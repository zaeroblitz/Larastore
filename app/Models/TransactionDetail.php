<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = [
        'code',
        'transactions_id',
        'products_id',
        'price',
        'resi',
        'shipping_status',
    ];
}