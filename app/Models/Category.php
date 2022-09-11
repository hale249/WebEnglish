<?php

namespace App\Models;

use App\Models\Traits\Attributes\CategoryAttribute;
use App\Models\Traits\Relationships\CategoryRelationship;
use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, CategoryAttribute, CategoryRelationship, Slug;
    const VIDEO = 'video';

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'image',
        'description',
        'is_active'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'is_disabled' => 'boolean'
    ];
}
