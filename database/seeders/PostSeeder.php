<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
/**
 * Run the database seeds.
 */
public function run(): void
{
    $posts = Post::factory()->count(10)->create();

    // Check if the posts were created successfully
    if ($posts->count() === 10) {
        echo 'Seeding completed successfully.';
    } else {
        echo 'Seeding failed.';
    }
}
}
