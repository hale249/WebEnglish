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
            'name' => 'Phát âm',
            'slug' => SkillCategory::PRONUNCIATION
        ], [
            'name' => 'Phát âm',
            'slug' => SkillCategory::PRONUNCIATION,
            'image' => '/images/ig_lpa.jpg',
            'is_active' => true,
            'description' => 'Phát âm tiếng anh'
        ]);

        SkillCategory::query()->updateOrCreate([
            'name' => 'Từ vựng',
            'slug' => SkillCategory::VOCABULARY
        ], [
            'name' => 'Từ vựng',
            'image' => '/images/img2.jpg',
            'slug' => SkillCategory::VOCABULARY,
            'is_active' => true,
            'description' => 'Từ vựng tiếng anh'
        ]);

        SkillCategory::query()->updateOrCreate([
            'name' => 'Ngữ pháp',
            'slug' => SkillCategory::GRAMMAR
        ], [
            'name' => 'Ngữ pháp',
            'image' => '/images/ig_ld.jpg',
            'slug' => SkillCategory::GRAMMAR,
            'is_active' => true,
            'description' => 'Ngữ pháp tiếng anh'
        ]);

        SkillCategory::query()->updateOrCreate([
            'name' => 'Viết',
            'slug' => SkillCategory::WRITE
        ], [
            'name' => 'Viết',
            'image' => '/images/ig_thcs.jpg',
            'slug' => SkillCategory::WRITE,
            'is_active' => true,
            'description' => 'Viết tiếng anh'
        ]);
    }
}
