<?php

namespace App\Models\Traits\Relationships;

use App\Models\Product;
use App\Models\User;

trait ProductItemRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
