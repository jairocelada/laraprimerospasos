<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //['title', 'slug', 'content', 'category_id', 'description', 'posted','image']

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        for ($i=0; $i < 30; $i++) { 
           $c = Category::inRandomOrder()->first();
           $title = Str::random(20);

           Post::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum perspiciatis adipisci enim, at reiciendis voluptate distinctio amet, similique quisquam dicta minima illo praesentium numquam, nemo nihil eveniet. Sapiente, sequi ad?</p>",
                'category_id' => $c->id,
                'description' => "Lorem ipsum dolor sit amet consectetur",
                'posted' => "yes"
            ]);
        }
    }
}
