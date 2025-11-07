<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prefectures')->insert([
            ['name' => 'Tokushima'],
            ['name' => 'Kochi'],
            ['name' => 'Ehime'],
            ['name' => 'Kagawa']
        ]);
    }
}
