<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;
use App\Colour;
use App\Size;

$categories = Category::all();
$colours = Colour::all();
$sizes = Size::all();

$factory->define(Product::class, function(Faker $faker) use($categories, $colours, $sizes) {
  $path = storage_path('app/public/products');

  return [
    'name' => $faker->sentence(2),
    'category_id'=> $categories->random()->id,
    'colour_id'=> $colours->random()->id,
    'size_id'=> $sizes->random()->id,
    'description' => $faker->sentence(20),
    'price' => $faker->randomFloat(2, 300, 4000),
    // 'stock' => $faker->numberBetween(1, 15),
    'image' => $faker->image($path ,400 ,400 ,'abstract' ,false),
  ];
});
