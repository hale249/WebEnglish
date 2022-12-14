<?php

namespace App\Models\Traits\Attributes;

trait StatusLabelAttribute
{
    public function getStatusLabelAttribute(): string
    {
        if (!is_bool($this->is_active)) {
            return '';
        }

        if ($this->is_active) {
            return '<span class="badge badge-success">' . __('labels.general.show') . '</span>';
        }

        return '<span class="badge badge-danger">' . __('labels.general.hidden') . '</span>';
    }
}
