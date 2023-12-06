<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $category1 = \App\Models\Category::factory(1)->create([
            'slug' => 'personal',
            'name' => 'Personal'
        ])->first();

        $category2 = \App\Models\Category::factory(1)->create([
            'slug' => 'work',
            'name' => 'Work'
        ])->first();

        $user1 = \App\Models\User::factory(1)->create([
            'name' => 'Mohammed Sayed',
            'username' => 'mickey',
            'email' => 'mickey@example.com'
        ])->first();

        $user2 = \App\Models\User::factory(1)->create([
            'name' => 'Abdelrahman Yousri',
            'username' => 'abdo',
            'email' => 'abdelrahman@example.com'
        ])->first();

        \App\Models\Post::factory(5)->create([
            'user_id' => $user1->id,
            'category_id' => $category1->id
        ]);

        \App\Models\Post::factory(5)->create([
            'user_id' => $user1->id,
            'category_id' => $category2->id
        ]);

        \App\Models\Post::factory(5)->create([
            'user_id' => $user2->id,
            'category_id' => $category1->id
        ]);

        \App\Models\Post::factory(5)->create([
            'user_id' => $user2->id,
            'category_id' => $category2 ->id
        ]);
    }
}
