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
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Temple')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' => 'iwamotoji_37_ceiling.png',
                'title' => '575 paintings on the ceiling!',
                'created_at' => now(),
                'prefecture_id' =>DB::table('prefectures')->where('name', 'Kochi')->value('id'),
                'temple_id'=> DB::table('temples')->where('id', '37')->value('id'),
            ],
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '2')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Temple')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' => 'img/iwamotoji_37',
                'title' => 'Iwamotoji Temple',
                'created_at' => now(),
                'prefecture_id' =>DB::table('prefectures')->where('name', 'Kochi')->value('id'),
                'temple_id'=> DB::table('temples')->where('id', '37')->value('id'),
            ],

            [
                'user_id'=>User::inRandomOrder()->where('role_id', '2')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Temple')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' =>'img/ryozenji.png',
                'title' => 'Ryozenji Temple',
                'created_at' => now(),
                'prefecture_id' =>DB::table('prefectures')->where('name', 'Tokushima')->value('id'),
                'temple_id'=> DB::table('temples')->where('id', '1')->value('id'),
            ],

            
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Temple')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' =>'img/stamp_okuboji_88.png',
                'title' => 'Goshuin from the final temple',
                'created_at' => now(),
                'prefecture_id' =>DB::table('prefectures')->where('name', 'Kagawa')->value('id'),
                'temple_id'=> DB::table('temples')->where('id', '88')->value('id'),
            ],
           
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Food')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' =>'img/udon_shosanji.png',
                'title' => 'Best udon in Tokushima',
                'created_at' => now(),
                'prefecture_id' =>DB::table('prefectures')->where('name', 'Tokushima')->value('id'),
                'temple_id'=> DB::table('temples')->where('id', '12')->value('id'),
            ],


            [
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Other')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'Before Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'title' => 'Arrived in Tokushima!',
                'photo_path' => null,
                'created_at' => now(),
                'prefecture_id' =>DB::table('prefectures')->where('name', 'Tokushima')->value('id'),
                'temple_id'=> DB::table('temples')->where('id', '1')->value('id'),
            ],
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '2')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Support (Osettai)')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'Before Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'title' => 'Things to pack for an Shikoku Ohenro',
                'photo_path' => null,
                'created_at' => now(),
                'prefecture_id' =>DB::table('prefectures')->where('name', 'Tokushima')->value('id'),
                'temple_id'=> DB::table('temples')->where('id', '1')->value('id'),
            ],
        ]);

        $posts = [
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'), 
                'topic_id'=>DB::table('topics')->where('name', 'Other')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'After Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' => 'img/for_seed/after_ohenro.png',
                'title' => 'Ohenro Completed!',
                'created_at' => now(),
            ],
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '3')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Food')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path'=>'img/for_seed/dinner.png',
                'title' => 'Traditional Japanese Dinner',
                'created_at' => now(),
            ],
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Support (Osettai)')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' => 'img/gift_from_local.png',
                'title' => 'A lovely gift from a local',
                'created_at' => now(),
            ],

            [
                'user_id'=>User::inRandomOrder()->where('role_id', '2')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Other')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' =>'img/museum_1.png',
                'title' => 'Museum 1',
                'created_at' => now(),
            ],

            [
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Ohenro road')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' =>'img/road.png',
                'title' => 'Tiny trail art on the way to Temple No.50',
                'created_at' => now(),
            ],

            [
                'user_id'=>User::inRandomOrder()->where('role_id', '1')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Ohenro road')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' =>'img/seaside.png',
                'title' => 'Beautiful seaside view',
                'created_at' => now(),
            ],
             [
                'user_id'=>User::inRandomOrder()->where('role_id', '3')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Hotel & Inn')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' =>'img/temple_inn.png',
                'title' => 'hotel 1',
                'created_at' => now(),
            ],
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '2')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Food')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' => null,
                'title' => 'Must-buy souvenirs in Shikoku',
                'created_at' => now(),
            ],
            [
                'user_id'=>User::inRandomOrder()->where('role_id', '3')->first()->value('id'),
                'topic_id'=>DB::table('topics')->where('name', 'Support (Osettai)')->value('id'),
                'status_id'=>DB::table('status')->where('name', 'During Ohenro')->value('id'),
                'body' => fake()->paragraph(),
                'photo_path' => null,
                'title' => 'Free public onsen (hot spring) near our hotel',
                'created_at' => now(),
            ]

        ];

        foreach ($posts as &$post)
        {
            $temple = Temple::inRandomOrder()->first();

            $post['temple_id'] = $temple->id;
            $post['prefecture_id'] = $temple->prefecture_id;
        }

        DB::table('posts')->insert($posts);

    }
}
