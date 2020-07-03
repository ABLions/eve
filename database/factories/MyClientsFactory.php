<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MyClients;
use Faker\Generator as Faker;

$factory->define(MyClients::class, function (Faker $faker) {

    return [
        'name' => $faker->text,
        'phone' => $faker->randomDigitNotNull,
        'mail' => $faker->text,
        'comments' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
