<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::query()
            ->create([
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin')
            ]);

        $user->assignRole(\App\Helpers\PermissionConstant::ROLE_ADMIN);
    }
}
