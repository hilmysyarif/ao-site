<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'nickname' => $faker->firstName,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'image' => $faker->image(250, 250),
        'birth' => $faker->dateTime,
        'remember_token' => str_random(10),
    ];
});