<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Seller::class, function (Faker $faker) {

	$the_name = $faker->name;
    $commercial_name = $faker->name;


    return [
        'name' => $the_name,
        'email' => $faker->unique()->safeEmail,
        'commercial_name' => $commercial_name,
        'slug' => str_slug($commercial_name),
        'description' => $faker->text(50), 
        'rif' => rand(1,88000),
        'address' => $faker->address,
        'manager' => $faker->name,
        'phone_number' => rand(1,9000),
        'bank_account' => rand(1,10000),

    ];
});
