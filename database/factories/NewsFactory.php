<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [

        'title' => $faker->sentence,
        'body' => $faker->paragraphs(100,TRUE),
        'image' => $faker->imageUrl($width= 640,$height=480),
        'user_id' => 1,
        'cat_id' => 1,
    ];
});
