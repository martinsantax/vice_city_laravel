<?php

use Illuminate\Database\Seeder;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("colours")->insert(
        [
          "name" => "Red"
        ]
      );
      DB::table("colours")->insert(
        [
          "name" => "Blue"
        ]
      );
      DB::table("colours")->insert(
        [
          "name" => "Violet"
        ]
      );
      DB::table("colours")->insert(
        [
          "name" => "Green"
        ]
      );
      DB::table("colours")->insert(
        [
          "name" => "Black"
        ]
      );
      DB::table("colours")->insert(
        [
          "name" => "White"
        ]
      );
      DB::table("colours")->insert(
        [
          "name" => "Orange"
        ]
      );
      DB::table("colours")->insert(
        [
          "name" => "Pink"
        ]
      );
    }
}
