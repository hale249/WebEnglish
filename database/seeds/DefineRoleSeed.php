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
    }
}
