<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  $path = storage_path('app/public/product');

  $categorias = ["jeans","camisetas","camperas","accesorios"];

  return [
    'name' => $faker->sentence(2),
    'tags' => $categorias[rand(0,3)],
    'description' => $faker->sentence(20),
    'price'=>$faker->randomFloat(2, 300, 4000),
    'image'=> $faker->image($path, 175, 175,'fashion', false),
  ];
});
