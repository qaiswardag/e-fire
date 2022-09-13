<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Person;
use App\Models\Shoes;
use App\Models\User;
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
        Person::factory(30)->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
        Shoes::factory(rand(1, 10))->create();
    }
}
