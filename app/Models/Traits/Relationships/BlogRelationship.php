<?php

namespace App\Models\Traits\Relationships;

use App\Models\User;

trait BlogRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
