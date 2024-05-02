<?php

use Mikus\Movies\Models\Movie;
use Mikus\Movies\Models\Actor;

Route::get('seed-actors', function () {
    
    $faker = Faker\Factory::create();
    for($i = 0; $i < 100; $i++){
        Actor::create([
            'name' => $faker->firstName,
            'lastname' => $faker->lastName
        ]);
    }

    return "Actors created!";
});