<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->words(2, true),
        'description' => $faker->paragraph(4),
        'arrived' => $faker->date('Y-m-d', '-3 years'),
        'retired' => $faker->date('Y-m-d', 'now'),
    ];
});
