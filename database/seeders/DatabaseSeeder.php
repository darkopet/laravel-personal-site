<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    # truncate() needed if database is refreshed at the start
    //    User::truncate();
    //    Post::truncate();
    //    Category::truncate();

       $user = User::factory()->create([
          'name' => 'John Doe'
       ]);

       Post::factory(5)->create([
           'user_id' => $user->id
       ]);
    }
}
