<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserAdminSeed::class);
        $this->call(SkillCategorySeeder::class);
        $this->call(BookSeeder::class);
    }
}
