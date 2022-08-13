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
    | Products
    |--------------------------------------------------------------------------
    */
    public const PERMISSION_VIEW_LIST_ALL_PRODUCT = 'View List All Product';
    public const PERMISSION_VIEW_LIST_PRODUCT = 'View List Product';
    public const PERMISSION_ADD_PRODUCT = 'Add Product';
    public const PERMISSION_UPDATE_ALL_PRODUCT = 'Update All Product';
    public const PERMISSION_UPDATE_PRODUCT = 'Update Product';
    public const PERMISSION_DELETE_ALL_PRODUCT = 'Delete All Product';
    public const PERMISSION_DELETE_PRODUCT = 'Delete Product';

    /*
    |--------------------------------------------------------------------------
    | Items
    |--------------------------------------------------------------------------
    */
    public const PERMISSION_UPDATE_ALL_TOKEN_ITEM = 'Update All Token Product Item';
    public const PERMISSION_UPDATE_TOKEN_ITEM = 'Update Token Product Item';
    public const PERMISSION_DELETE_ALL_ITEM = 'Delete All Product Item';
    public const PERMISSION_DELETE_ITEM = 'Delete Product Item';

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
