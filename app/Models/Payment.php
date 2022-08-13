<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $table = 'payments';

    protected $fillable = [
        'user_id',
        'product_item_id',
        'price',
        'status',
        'source',
        'reason_failed',
        'finished_at',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'product_item_id' => 'integer',
        'price' => 'double',
        'status' => 'integer',
        'source' => 'integer',
        'finished_at' => 'datetime',
    ];

    public $status = [
        0 => 'Awaiting payment',
        1 => 'Payment success',
        2 => 'Payment failed'
    ];

    public $source = [
        1 => 'Paypal'
    ];
}
