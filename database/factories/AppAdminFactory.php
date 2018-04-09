<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'mobile' => $faker->phoneNumber(),
		'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
		'remember_token' => str_random(10),
		'last_login_time' => Carbon::now(),
		'last_login_ip' => '1.80.137.174',
		'created_at' => Carbon::now(),
		'updated_at' => Carbon::now(),
	];
});
