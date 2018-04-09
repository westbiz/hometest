<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
	return [
		'user_id' => 1,
		'title' => $faker->sentence,
		'content' => $faker->catchPhrase(),
	];
});
