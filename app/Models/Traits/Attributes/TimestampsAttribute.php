<?php

namespace App\Models\Traits\Attributes;

use Carbon\Carbon;

trait TimestampsAttribute
{
    public function getCreatedAtAttribute($date)
    {
        return !empty($date) ? Carbon::parse($date)->format('d/m/Y') : '';
    }

    public function getUpdatedAtAttribute($date)
    {
        return !empty($date) ? Carbon::parse($date)->format('d/m/Y') : '';
    }
}
