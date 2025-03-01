<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'title' => 'Post Pertama',
            'content' => 'Ini adalah postingan pertama.'
        ]);
    }
}
