<?php

namespace App\Policies;

use App\Helpers\Checkers\ProductCheck;
use App\Models\ProductItem;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductItemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param ProductItem $productItem
     * @return bool
     */
    public function delete(User $user, ProductItem $productItem): bool
    {
        return ProductCheck::deleteProductItemCheck($user, $productItem->user_id);
    }
}
