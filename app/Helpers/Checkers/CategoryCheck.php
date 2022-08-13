<?php

namespace App\Helpers\Checkers;

use App\Helpers\PermissionConstant;
use App\Models\User;

class CategoryCheck
{
    /**
     * Check user can show category
     *
     * @param User $user
     * @param int $authorId
     * @return bool
     */
    public static function showCheck(User $user, int $authorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY) && $authorId === $user->id) {
            return true;
        }

        return false;
    }

    /**
     * Check user can update category
     *
     * @param User $user
     * @param int $authorId
     * @return bool
     */
    public static function updateCheck(User $user, int $authorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_UPDATE_ALL_CATEGORY)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_UPDATE_CATEGORY) && $user->id === $authorId) {
            return true;
        }

        return false;
    }

    /**
     * Check user can delete category
     *
     * @param User $user
     * @param int $authorId
     * @return bool
     */
    public static function deleteCheck(User $user, int $authorId): bool
    {
        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_ALL_CATEGORY)) {
            return true;
        }

        if ($user->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_CATEGORY) && $user->id === $authorId) {
            return true;
        }

        return false;
    }
}
