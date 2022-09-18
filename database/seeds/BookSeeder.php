<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 6',
            'description' => 'Sách tiếng anh lớp 6',
            'is_active' => true,
            'is_new' => false,
            'class_number' => 6,
            'image' => '/images/book/lop-6-moi.png',
        ]);

        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 6 - sách mới',
            'description' => 'Sách tiếng anh lớp 6',
            'is_active' => true,
            'is_new' => true,
            'class_number' => 6,
            'image' => '/images/book/lop-6-cu.png',
        ]);

        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 7',
            'description' => 'Sách tiếng anh lớp 7',
            'is_active' => true,
            'is_new' => false,
            'class_number' => 7,
            'image' => '/images/book/lop-7-moi.png',
        ]);

        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 7 - sách mới',
            'description' => 'Sách tiếng anh lớp 7',
            'is_active' => true,
            'is_new' => true,
            'class_number' => 7,
            'image' => '/images/book/lop-7-cu.png',
        ]);

        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 8',
            'description' => 'Sách tiếng anh lớp 8',
            'is_active' => true,
            'is_new' => false,
            'class_number' => 8,
            'image' => '/images/book/lop-8-moi.png',
        ]);

        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 8 - sách mới',
            'description' => 'Sách tiếng anh lớp 8',
            'is_active' => true,
            'is_new' => true,
            'class_number' => 8,
            'image' => '/images/book/lop-8-cu.png',
        ]);

        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 9',
            'description' => 'Sách tiếng anh lớp 9',
            'is_active' => true,
            'is_new' => false,
            'class_number' => 9,
            'image' => '/images/book/lop-9-moi.png',
        ]);

        Book::query()->updateOrCreate([
            'user_id' => 1,
            'name' => 'Tiếng anh lớp 9 - sách mới',
            'description' => 'Sách tiếng anh lớp 9',
            'is_active' => true,
            'is_new' => true,
            'class_number' => 9,
            'image' => '/images/book/lop-9-cu.png',
        ]);
    }
}