<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Campaign::class, function (Faker $faker) {

	$title = $faker->sentence(4);
	

    return [
        
        'name' => $title,
    	'description' => $faker->sentence(10),
    	'slug' => str_slug($title),
    	'banner_1' => $faker->imageUrl($width = 700, $height = 400),
    	'banner_2' => $faker->imageUrl($width = 700, $height = 400),
    	'banner_3' => $faker->imageUrl($width = 700, $height = 400),



    ];
});
