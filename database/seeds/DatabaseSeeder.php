<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ColourSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(CategorySeeder::class);

        factory(\App\Product::class, 20)->create();

    }
}
