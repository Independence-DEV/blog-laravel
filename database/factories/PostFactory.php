<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->word() . ' ' . $faker->word();
    $content = $faker->text(50);
    $description = $faker->text(50);
    return [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'thumbnail' => 'test',
        'online' => true,
    ];
});
