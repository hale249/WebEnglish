<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProductItemAttribute;
use App\Models\Traits\Relationships\ProductItemRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductItem extends Model
{
    use SoftDeletes, ProductItemRelationship, ProductItemAttribute;

    protected $table = 'product_items';

    protected $fillable = [
        'user_id',
        'product_id',
        'token',
        'sold_at',
        'is_disabled',
        'is_processing'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'product_id' => 'integer',
        'sold_at' => 'datetime',
        'is_disabled' => 'boolean',
        'is_processing' => 'boolean',
    ];

    protected $hidden = ['token'];
}
