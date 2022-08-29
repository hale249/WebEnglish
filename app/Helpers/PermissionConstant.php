<?php

namespace App\Helpers;

interface PermissionConstant
{
    /*
    |--------------------------------------------------------------------------
    | Manager Users
    |--------------------------------------------------------------------------
    */
    public const PERMISSION_VIEW_BACKEND = 'View Backend';
    public const PERMISSION_VIEW_LIST_MANAGER_USER = 'View List Backend User';
    public const PERMISSION_ADD_MANAGER_USER = 'Add Backend User';
    public const PERMISSION_UPDATE_MANAGER_USER = 'Update Backend User';
    public const PERMISSION_DELETE_MANAGER_USER = 'Delete Backend User';

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */
    public const PERMISSION_VIEW_LIST_ALL_CATEGORY = 'View List All Category';
    public const PERMISSION_VIEW_LIST_CATEGORY = 'View List Category';
    public const PERMISSION_ADD_CATEGORY = 'Add Category';
    public const PERMISSION_UPDATE_ALL_CATEGORY = 'Update All Category';
    public const PERMISSION_UPDATE_CATEGORY = 'Update Category';
    public const PERMISSION_DELETE_ALL_CATEGORY = 'Delete All Category';
    public const PERMISSION_DELETE_CATEGORY = 'Delete Category';

    /*
    |--------------------------------------------------------------------------
    | Roles
    |--------------------------------------------------------------------------
    */
    public const ROLE_ADMIN = 'ADMIN';
    public const ROLE_MANAGER = 'MANAGER';

    public const ROLES = [
        self::ROLE_ADMIN,
        self::ROLE_MANAGER,
    ];
 }
