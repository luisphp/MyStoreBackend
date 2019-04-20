<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {

	$title = $faker->sentence(4);
	$name_f = $faker->name;

    return [
        
        
    	
    	'name' => $title,
    	'description' => $faker->sentence(10),
    	'slug' => str_slug($title),

    ];
});
