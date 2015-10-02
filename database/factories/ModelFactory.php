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

/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});*/


$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'phone'  => $faker->phoneNumber,
        'service'  => $faker->company,
        'city'  => $faker->city,
        'address' => $faker->address,
        'position' => 'Владелец сервиса',
        'email' => $faker->email,
        'password' => bcrypt('asdasdA1'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function ($faker) {
    return [
        'type' => 'Масла, смазки',
        'category' => 'IND',
        'brand'  => 'G-Family',
        'title'  => $faker->company,
        'description'  => $faker->sentence(10),
        'price' => $faker->randomNumber(3),
    ];
});
