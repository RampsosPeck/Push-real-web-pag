<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Pushereal\Model;
use Pushereal\Post;
use Faker\Generator as Faker;

$factory->define(Pushereal\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'content' => $faker->realText($faker->numberBetween(10, 100))
    ];
});


 