<?php

namespace Database\Seeders;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            PrefectureTableSeeder::class,
            TempleTableSeeder::class,
            StatusTableSeeder::class,
            TopicTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class
        ]);
    }
}
