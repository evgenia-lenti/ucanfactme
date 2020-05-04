<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fact;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Fact::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'subtitle' => $faker->sentence(3),
        'content' => $faker-> paragraph(1),
        'publish_date' => Carbon::now(),
        'source' => $faker->sentence(3),
        'author_id' => $faker->sentence(1),
    ];
});
