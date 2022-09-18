<?php

use Illuminate\Database\Seeder;
use App\Models\SkillCategory;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SkillCategory::query()->updateOrCreate([
            'name' => 'Phát âm tiếng anh',
            'slug' => SkillCategory::PRONUNCIATION
        ], [
            'name' => 'Phát âm tiếng anh',
            'slug' => SkillCategory::PRONUNCIATION,
            'is_active' => true,
            'description' => 'Phát âm tiếng anh'
        ]);

        SkillCategory::query()->updateOrCreate([
            'name' => 'Từ vựng tiếng anh',
            'slug' => SkillCategory::VOCABULARY
        ], [
            'name' => 'Từ vựng tiếng anh',
            'slug' => SkillCategory::VOCABULARY,
            'is_active' => true,
            'description' => 'Từ vựng tiếng anh'
        ]);

        SkillCategory::query()->updateOrCreate([
            'name' => 'Ngữ pháp tiếng anh',
            'slug' => SkillCategory::GRAMMAR
        ], [
            'name' => 'Ngữ pháp tiếng anh',
            'slug' => SkillCategory::GRAMMAR,
            'is_active' => true,
            'description' => 'Ngữ pháp tiếng anh'
        ]);

        SkillCategory::query()->updateOrCreate([
            'name' => 'Viết tiếng anh',
            'slug' => SkillCategory::WRITE
        ], [
            'name' => 'Viết tiếng anh',
            'slug' => SkillCategory::WRITE,
            'is_active' => true,
            'description' => 'Viết tiếng anh'
        ]);
    }
}
