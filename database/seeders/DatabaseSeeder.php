<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Seeders\PostSeeder;
use App\Models\Tag;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Asegúrate de que el directorio se pueda crear

        Storage::disk('public')->deleteDirectory('posts');
        Storage::disk('public')->makeDirectory('posts');
        
        
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);
    }
}
