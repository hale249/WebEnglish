<?php

namespace App\Models\Traits\Attributes;

use App\Helpers\Checkers\ProductCheck;

trait ProductItemAttribute
{
    use StatusLabelAttribute;

    /**
     * @return string
     */
    public function getPaymentStatusLabelAttribute(): string
    {
        return (!empty($this->sold_at)) ? '<span class="badge badge-danger">' . __('labels.general.sold') . '</span>' : '<span class="badge badge-info">' . __('labels.general.selling') . '</span>';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute(): string
    {
        return '
        <div class="btn-group btn-group-sm" role="group" aria-label="Product Actions">
          '.$this->hidden_action_button.'
          '.$this->show_action_button.'
          '.$this->edit_token_button.'
          '.$this->delete_button.'
        </div>';
    }

    /**
     * @return string
     */
    public function getEditTokenButtonAttribute(): string
    {
        if (ProductCheck::editItemTokenCheck(auth()->user(), $this->product->user_id)) {
            return '<a href="'.route('admin.product_item.edit_token', $this->id).'" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
        }

        return '';
    }

    public function getHiddenActionButtonAttribute(): string
    {
        if (!$this->product) {
            return '';
        }

        if (!ProductCheck::updateCheck(auth()->user(), $this->product->user_id)) {
            return '';
        }

        if ($this->is_disabled) {
            return '';
        }

        return '<a href="' . route('admin.product_item.change_status', $this->id) . '"
             data-trans-button-cancel="' . __('labels.general.cancel') . '"
             data-trans-button-confirm="' . __('labels.general.update') . '"
             data-trans-title="' . __('labels.pages.admin.product_item.confirm_hidden') . '"
             data-method="put"
             data-update=\'[{"key" : "status", "value" : "0"}]\'
             class="btn btn-warning js-confirm-update btn-sm"><i class="fas fa-lock"></i></a>';
    }

    public function getShowActionButtonAttribute(): string
    {
        if (!$this->product) {
            return '';
        }

        if (!ProductCheck::updateCheck(auth()->user(), $this->product->user_id)) {
            return '';
        }

        if (!$this->is_disabled) {
            return '';
        }

        return '<a href="' . route('admin.product_item.change_status', $this->id) . '"
             data-trans-button-cancel="' . __('labels.general.cancel') . '"
             data-trans-button-confirm="' . __('labels.general.update') . '"
             data-trans-title="' . __('labels.pages.admin.product_item.confirm_show') . '"
             data-method="put"
             data-update=\'[{"key" : "status", "value" : "1"}]\'
             class="btn btn-warning js-confirm-update btn-sm"><i class="fas fa-unlock-alt"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(): string
    {
        if (!$this->product) {
            return '';
        }

        if (ProductCheck::deleteProductItemCheck(auth()->user(), $this->user_id)) {
            return '<a href="' . route('admin.product_item.destroy', $this->id) . '"
                 data-trans-button-cancel="' . __('labels.general.cancel') . '"
                 data-trans-button-confirm="' . __('labels.general.delete') . '"
                 data-trans-title="' . __('strings.confirm_delete') . '"
                 class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>';
        }

        return '';
    }
}
