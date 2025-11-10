<?php

namespace Database\Factories;

use App\Models\Temple;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Temple>
 */
class TempleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return $this->temple(function () {
            $temple = Temple::inRandomOrder()->first();

            return [
            'temple_id' =>$temple->id,
            'prefecture_id'=>$temple->prefecture_id,
            ];
        });
    }
}
