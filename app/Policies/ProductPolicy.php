<?php

namespace App\Policies;

use App\Helpers\Checkers\ProductCheck;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Product $product
     * @return bool
     */
    public function view(User $user, Product $product): bool
    {
        return ProductCheck::showCheck($user, $product->user_id);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Product $product
     * @return bool
     */
    public function update(User $user, Product $product): bool
    {
        return ProductCheck::updateCheck($user, $product->user_id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Product $product
     * @return bool
     */
    public function delete(User $user, Product $product): bool
    {
        return ProductCheck::deleteCheck($user, $product->user_id);
    }

    /**
     * Check user can edit token of product item
     *
     * @param User $user
     * @param Product $product
     * @return bool
     */
    public function updateTokenItem(User $user, Product $product): bool
    {
        return ProductCheck::editItemTokenCheck($user, $product->user_id);
    }
}
