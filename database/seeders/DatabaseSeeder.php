<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(
            [
                ContactSeeder::class,
                UserSeeder::class,
                PostSeeder::class,
                CategorySeeder::class
            ]
        );

    //    $user = User::factory()->create([
    //       'name' => 'John Doe'
    //    ]);

    //    Post::factory(5)->create([
    //        'user_id' => $user->id
    //    ]);
    }
}
