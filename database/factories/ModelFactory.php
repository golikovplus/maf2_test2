<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Lead::class, function (Faker\Generator $faker) {
    return [
        'location' => $faker->longitude,
        'lead_type' => rand(0,10),
        'preferences' => rand(0,10),
        'price_range' => rand(0,10),
        'home_type' => rand(0,10),
        'time_frame' => rand(0,10),
        'agent_hero' => rand(0,1),
        'fullname' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
    ];
});
