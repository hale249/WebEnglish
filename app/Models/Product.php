<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProductAttribute;
use App\Models\Traits\Relationships\ProductRelationship;
use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, ProductRelationship, ProductAttribute, Slug;

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'slug',
        'image',
        'description',
        'content',
        'price',
        'quantity',
        'is_disabled'
    ];

    protected $casts = [
        'category_id' => 'integer',
        'user_id' => 'integer',
        'price' => 'double',
        'quantity' => 'integer',
        'is_disabled' => 'boolean'
    ];
}
