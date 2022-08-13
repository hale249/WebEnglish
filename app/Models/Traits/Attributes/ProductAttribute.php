<?php

namespace App\Models\Traits\Attributes;

use App\Helpers\Checkers\ProductCheck;

trait ProductAttribute
{
    use StatusLabelAttribute;

    /**
     * @return string
     */
    public function getActionButtonsAttribute(): string
    {
        return '
        <div class="btn-group btn-group-sm" role="group" aria-label="Product Actions">
          '.$this->show_button.'
          '.$this->edit_button.'
          '.$this->delete_button.'
          '.$this->show_item_button.'
        </div>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(): string
    {
        if (ProductCheck::updateCheck(auth()->user(), $this->user_id)) {
            return '<a href="'.route('admin.product.edit', $this->id).'" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getShowButtonAttribute(): string
    {
        if (ProductCheck::showCheck(auth()->user(), $this->user_id)) {
            return '<a href="'.route('admin.product.show', $this->id).'" data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a>';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(): string
    {
        if (ProductCheck::deleteCheck(auth()->user(), $this->user_id)) {
            return '<a href="' . route('admin.product.destroy', $this->id) . '"
                 data-trans-button-cancel="' . __('labels.general.cancel') . '"
                 data-trans-button-confirm="' . __('labels.general.delete') . '"
                 data-trans-title="' . __('strings.confirm_delete') . '"
                 class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getPriceLabelAttribute(): string
    {
        return '$' . $this->price;
    }

    /**
     * @return string
     */
    public function getShowItemButtonAttribute(): string
    {
        return '<a href="'.route('admin.product_item.index', $this->id).'" class="btn btn-info btn-sm">' . __('labels.pages.admin.product.table.view_item') . '</a>';
    }
}
