<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Classification;
use App\Models\Genre;
use App\Models\Keyword;
use App\Models\Language;
use App\Models\Librarian;
use App\Models\Form;
use App\Models\Format;
use App\Models\Origin;
use App\Models\Period;
use App\Models\Publisher;
use App\Models\Type;
use App\Models\User;
use App\Models\Year;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => Author::factory(),
            'publisher_id' => Publisher::factory(),
            'keywords' => $this->faker->sentence(),
            'form_id' => Form::factory(),
            'format_id' => Format::factory(),
            'type_id' => Type::factory(),
            'genre_id' => Genre::factory(),
            'origin_id' => Origin::factory(),
            'period_id' => Period::factory(),
            'language_id' => Language::factory(),
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'original_title' => $this->faker->sentence(),
            'summary' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            'translator' => $this->faker->name(),
            'editor' => $this->faker->name(),
            'print' => $this->faker->word(),
            'pages' => $this->faker->randomNumber(),
            'year_id' => Year::factory(),
            'isbn' => $this->faker->unique()->numerify('###-#-##-######-#'),



        ];
    }
}
