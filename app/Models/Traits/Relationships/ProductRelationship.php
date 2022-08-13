<?php

namespace App\Models\Traits\Relationships;

use App\Models\Category;
use App\Models\ProductItem;
use App\Models\User;

trait ProductRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function product_items()
    {
        return $this->hasMany(ProductItem::class, 'product_id', 'id');
    }
}
