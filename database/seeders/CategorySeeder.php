<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::factory(8)->create();


        foreach (Category::where('type', 'postCategory')->get() as $category) {
            $posts = Post::inRandomOrder()->take(rand(4, 8))->pluck('id');
            $category->posts()->attach($posts);
        }
    }
}
