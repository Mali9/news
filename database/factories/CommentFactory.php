<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->sentence,
        'user_id' => 1,
        'news_id' =>1,
    ];
});
