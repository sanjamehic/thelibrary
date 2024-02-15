<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Origin;
use App\Models\Period;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'origin_id' => Origin::factory(),
            'period_id' => Period::factory(),
            'language_id' => Language::factory(),
            'name' => $this->faker->name(),
            'alias' => $this->faker->name(),
            'slug' => $this->faker->slug(),

        ];
    }
}
