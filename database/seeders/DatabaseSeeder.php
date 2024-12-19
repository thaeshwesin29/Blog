<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Add this line to import DB

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Disable foreign key checks before truncating
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the table

        // Re-enable foreign key checks after truncating
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create users
        $mgmg = User::factory()->create(['name' => 'mgmg', 'username' => 'mgmg']);
        $aungaung = User::factory()->create(['name' => 'aungaung', 'username' => 'aungaung']);

        // Create categories
        $frontend = Category::factory()->create(['name' => 'frontend', 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backend', 'slug' => 'backend']);

        // Create blogs
        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $mgmg->id]);
        Blog::factory(2)->create(['category_id' => $backend->id, 'user_id' => $aungaung->id]);

        // Create comments
        Comment::factory(10)->create();
    }
}
