<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {

	$title = $faker->sentence(4);

    return [
        
    	'created_by_user' => rand(1,20),
    	'seller_id' => rand(1,20),
    	'category_id' => rand(1,20),
    	'name' => $title,
    	'slug' => str_slug($title),
    	'bullets' => $faker->text(10),
    	'description' => $faker->text(100),
    	'price' => rand(1,88000),
    	'SKU' => $faker->ean13,
    	'photo_1' => $faker->imageUrl($width = 500, $height =500),
    	'photo_2' => $faker->imageUrl($width = 500, $height =500),
    	'photo_3' => $faker->imageUrl($width = 500, $height =500),
    	'stock' => rand(20,50),


    ];
});
