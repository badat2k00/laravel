<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Userss;
use App\Models\Blogss;
use App\Models\Commentss;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
     
        $faker = Faker::create();

        // Tạo 10 userss
         // Tạo 10 userss
         for ($i = 0; $i < 10; $i++) {
            DB::table('userss')->insert([
                'username' => $faker->userName,
                'password' => bcrypt('password'),
            ]);
        }

        // Tạo 20 blogss với người viết ngẫu nhiên
        for ($i = 0; $i < 20; $i++) {
            $user_id = rand(1, 10);
            DB::table('blogss')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraphs(rand(3, 6), true),
                'author_id' => $user_id,
            ]);
            $blog_id = DB::getPdo()->lastInsertId();

            // Tạo 2 commentss cho mỗi blogss
            for ($j = 0; $j < 2; $j++) {
                DB::table('commentss')->insert([
                    'content' => $faker->paragraphs(1, true),
                    'blog_id' => $blog_id,
                    'author_id' => $user_id,
                ]);
            }
        }
    }
}
