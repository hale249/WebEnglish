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
            ->updateOrCreate([
                'email' => 'admin@gmail.com',
            ], [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'role' => \App\Helpers\PermissionConstant::ROLE_ADMIN,
                'password' => Hash::make('admin')
            ]);
    }
}
