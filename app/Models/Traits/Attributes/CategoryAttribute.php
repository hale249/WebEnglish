<?php

namespace App\Models\Traits\Attributes;

trait CategoryAttribute
{
    use StatusLabelAttribute;

    /**
     * @return string
     */
    public function getActionButtonsAttribute(): string
    {
        return '
        <div class="btn-group btn-group-sm" role="group" aria-label="Category Actions">
          '.$this->show_button.'
          '.$this->edit_button.'
          '.$this->delete_button.'
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        return '<a href="'.route('admin.category.edit', $this->id).'" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
    }

    /**
     * @return string
     */
    public function getShowButtonAttribute(): string
    {
        return '<a href="'.route('admin.category.show', $this->id).'" data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(): string
    {
        return '<a href="' . route('admin.category.destroy', $this->id) . '"
                 data-trans-button-cancel="' . __('labels.general.cancel') . '"
                 data-trans-button-confirm="' . __('labels.general.delete') . '"
                 data-trans-title="' . __('strings.confirm_delete') . '"
                 class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>';
    }
}
