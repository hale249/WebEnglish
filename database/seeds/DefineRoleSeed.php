<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Helpers\PermissionConstant;

class DefineRoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $roleAdmin = Role::query()
            ->updateOrCreate([
                'name' => PermissionConstant::ROLE_ADMIN
            ], []);

        $roleManager = Role::query()
            ->updateOrCreate([
                'name' => PermissionConstant::ROLE_MANAGER
            ], []);

        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_VIEW_BACKEND], []);

        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_VIEW_LIST_MANAGER_USER], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_ADD_MANAGER_USER], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_UPDATE_MANAGER_USER], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_DELETE_MANAGER_USER], []);

        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_ADD_CATEGORY], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_UPDATE_ALL_CATEGORY], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_UPDATE_CATEGORY], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_DELETE_ALL_CATEGORY], []);
        Permission::query()->updateOrCreate(['name' => PermissionConstant::PERMISSION_DELETE_CATEGORY], []);

        //ADMIN
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_VIEW_BACKEND);

        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_MANAGER_USER);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_ADD_MANAGER_USER);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_DELETE_MANAGER_USER);

        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_ADD_CATEGORY);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_UPDATE_ALL_CATEGORY);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_UPDATE_CATEGORY);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_DELETE_ALL_CATEGORY);
        $roleAdmin->givePermissionTo(PermissionConstant::PERMISSION_DELETE_CATEGORY);

        //MANAGER
        $roleManager->givePermissionTo(PermissionConstant::PERMISSION_VIEW_BACKEND);

        $roleManager->givePermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY);
        $roleManager->givePermissionTo(PermissionConstant::PERMISSION_ADD_CATEGORY);
        $roleManager->givePermissionTo(PermissionConstant::PERMISSION_UPDATE_CATEGORY);
    }
}
