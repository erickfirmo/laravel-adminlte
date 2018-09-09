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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $slug = $faker->unique()->name;
    $array = explode(' ', $slug);
    $name = $array[0];
    $lastname = $array[1];

    return [
        'name' => $name,
        'lastname' => $lastname,
        'email' => $faker->unique()->safeEmail,
        'slug' => str_slug($slug),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
