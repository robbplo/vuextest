<?php

use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
//        'id' => Uuid::uuid4()->toString(),
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
