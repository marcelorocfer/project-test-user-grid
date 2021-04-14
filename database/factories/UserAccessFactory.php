<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserAccess;
use Faker\Generator as Faker;

$factory->define(UserAccess::class, function (Faker $faker) {
    return [
        'last_login' => $faker->dateTimeBetween('-3 years', 'now'),
        'user_id' => App\User::all()->random()->id,
    ];
});
