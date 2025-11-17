<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    

    public function run(): void
    {
        DB::table('users')->insert([
            ## Manually inserting three specific users with different roles
            [
                'name' => 'Mei Hiraoka1',
                'email' => 'mei.hiraoka0731+test1@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('pilgrims1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'role_id' => DB::table('roles')->where('name', 'Pilgrims')->value('id'),
            ],
            [
                'name' => 'Mei Hiraoka2',
                'email' => 'mei.hiraoka0731+test2@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('locals2'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'role_id' => DB::table('roles')->where('name', 'Locals')->value('id'),
            ],
            [
                'name' => 'Mei Hiraoka3',
                'email' => 'mei.hiraoka0731+test3@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('hotels3'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'role_id' => DB::table('roles')->where('name', 'Hotel and Inn Owners')->value('id'),
            ],

        ]);
        User::factory()->count(20)->create();
    }
}
