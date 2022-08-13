<?php

namespace App\Helpers\Checkers;

use App\Helpers\PermissionConstant;
use App\Models\User;

class ProductCheck
{
    /**
     * Check user can show product
     *
     * @param User $user
     * @param int $authorId
     * @return bool
     */
    public static function showCheck(User $user, int $authorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_PRODUCT)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_PRODUCT) && $authorId === $user->id) {
            return true;
        }

        return false;
    }

    /**
     * Check user can update product
     *
     * @param User $user
     * @param int $authorId
     * @return bool
     */
    public static function updateCheck(User $user, int $authorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_UPDATE_ALL_PRODUCT)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_UPDATE_PRODUCT) && $user->id === $authorId) {
            return true;
        }

        return false;
    }

    /**
     * Check user can delete product
     *
     * @param User $user
     * @param int $authorId
     * @return bool
     */
    public static function deleteCheck(User $user, int $authorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_ALL_PRODUCT)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_PRODUCT) && $user->id === $authorId) {
            return true;
        }

        return false;
    }

    /**
     * Check user can update token of product item
     *
     * @param User $user
     * @param int $productAuthorId
     * @return bool
     */
    public static function editItemTokenCheck(User $user, int $productAuthorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_UPDATE_ALL_TOKEN_ITEM)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_UPDATE_TOKEN_ITEM) && $user->id === $productAuthorId) {
            return true;
        }

        return false;
    }

    /**
     * Check user can delete product item
     *
     * @param User $user
     * @param int $authorId
     * @return bool
     */
    public static function deleteProductItemCheck(User $user, int $authorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_ALL_ITEM)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_ITEM) && $user->id === $authorId) {
            return true;
        }

        return false;
    }
}
