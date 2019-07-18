<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("categories")->insert(
        [
          "name" => "Jeans"
        ]
      );
      DB::table("categories")->insert(
        [
          "name" => "Camisetas"
        ]
      );
      DB::table("categories")->insert(
        [
          "name" => "Camperas"
        ]
      );
      DB::table("categories")->insert(
        [
          "name" => "Accesorios"
        ]
      );
    }
}
