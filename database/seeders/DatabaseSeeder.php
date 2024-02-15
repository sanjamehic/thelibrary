<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Form;
use App\Models\Format;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Librarian;
use App\Models\Origin;
use App\Models\Period;
use App\Models\Publisher;
use App\Models\Type;
use App\Models\User;
use App\Models\Year;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Librarian::factory()->create([
            'name' => 'Alma Mesic',
        ]);

        Type::factory()
        ->count(2)
        ->state(new Sequence(
            ['name' => 'Fiction', 'slug' =>'fiction'],
            ['name' => 'Non-Fiction', 'slug' =>'non-fiction'],
            ))->create();

        Format::factory()
        ->count(5)
        ->state(new Sequence(
            ['name' => 'Paperback', 'slug' => 'paperback'],
            ['name' => 'Hardback', 'slug' => 'hardback'],
            ['name' => 'Audio', 'slug' => 'audio'],
            ['name' => 'Video', 'slug' => 'video'],
            ['name' => 'Digital', 'slug' => 'digital']
            ))
        ->create();

        Form::factory(1)
        ->count(3)
        ->state(new Sequence(
            ['name' => 'Poetry', 'slug' => 'poetry'],
            ['name' => 'Prose', 'slug' => 'prose'],
            ['name' => 'Drama', 'slug' => 'drama'],
            ))->create();

        Genre::factory(1)
        ->count(7)
        ->state(new Sequence(
            ['name' => 'Horror', 'slug' => 'horror'],
            ['name' => 'Drama', 'slug' => 'drama'],
            ['name' => 'Crime', 'slug' => 'crime'],
            ['name' => 'Romance', 'slug' => 'romance'],
            ['name' => 'Scientific Publication', 'slug' => 'scientific-publication'],
            ['name' => 'Fantasy', 'slug' => 'fantasy'],
            ['name' => 'SF', 'slug' => 'sf']
            ))->create();

        User::factory(1)
        ->count(1)
        ->state(new Sequence(
            ['name' => 'admin', 'username' => 'admin', 'email' => 'admin@admin.com', 'password' => 'admin', 'is_admin' => true],
            ))->create();


        Language::factory(10)->create();
        Origin::factory(10)->create();
        Period::factory(10)->create();
        Publisher::factory(10)->create();
        Year::factory(30)->create();
        Author::factory(20)->create();


    }
}
