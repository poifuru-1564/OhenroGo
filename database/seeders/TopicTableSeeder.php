<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('topics')->insert([
            ['name' => 'Food'],
            ['name' => 'Hotel & Inn'],
            ['name' => 'Support (Osettai)'],
            ['name' => 'Temple'],
            ['name' => 'Ohenro road'],
            ['name' => 'Other'],
        ]);
    }
}
