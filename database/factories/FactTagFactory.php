<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FactTag;
use Faker\Generator as Faker;

$factory->define(FactTag::class, function (Faker $faker) {
    return [
        'fact_id' => $faker->sentence(1),
        'tag_id' => $faker->sentence(1)
    ];
});
