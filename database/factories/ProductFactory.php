<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'description' => $faker->paragraphs(2, true),
        'price' => $faker->numberBetween(12, 120),
    ];
});
