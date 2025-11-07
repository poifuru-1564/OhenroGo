<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Temple;
use App\Models\Topic;
use App\Models\Status;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('posts')->insert([
            [
                'user_id'=>User::inRandomOrder()->first()->id,
                'topics_id'=>Topic::inRandomOrder()->first()->id,
                'status_id'=>Status::inRandomOrder()->first()->id,
                'body' => faker()->paragraph(),
                'photo_path' => ,
                'title' => ,
                Temple::factory(),
            ],
            [
                'user_id'=>User::inRandomOrder()->first()->id,
                'topics_id'=>Topic::inRandomOrder()->first()->id,
                'status_id'=>Status::inRandomOrder()->first()->id,
                'body' => faker()->paragraph(),
                'photo_path'
                'title' => 
                Temple::factory(),
            ],
            [
                'user_id'=>User::inRandomOrder()->first()->id,
                'topics_id'=>Topic::inRandomOrder()->first()->id,
                'status_id'=>Status::inRandomOrder()->first()->id,
                'body' => faker()->paragraph(),
                'photo_path'
                'title' => 
                Temple::factory()
            ],
            [
                'user_id'=>User::inRandomOrder()->first()->id,
                'topics_id'=>Topic::inRandomOrder()->first()->id,
                'status_id'=>Status::inRandomOrder()->first()->id,
                'body' => faker()->paragraph(),
                'photo_path'
                'title' => 
                Temple::factory()
            ],
            [
                'user_id'=>User::inRandomOrder()->first()->id,
                'topics_id'=>Topic::inRandomOrder()->first()->id,
                'status_id'=>Status::inRandomOrder()->first()->id,
                'body' => faker()->paragraph(),
                'photo_path'
                'title' => 
                Temple::factory()
            ],
            [
                'user_id'=>User::inRandomOrder()->first()->id,
                'topics_id'=>Topic::inRandomOrder()->first()->id,
                'status_id'=>Status::inRandomOrder()->first()->id,
                'body' => faker()->paragraph(),
                'photo_path'
                'title' => 
                Temple::factory()
            ],
        ]);

    }
}
