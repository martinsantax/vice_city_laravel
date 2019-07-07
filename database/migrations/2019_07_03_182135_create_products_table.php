<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products', function (Blueprint $table){
         $table->bigIncrements('id');
         $table->string('name', 50); //->default();   para cuando no tenes que poner//
         $table->string('description', 255);
         $table->decimal('price',6,2);
         $table->string('image', 150);
         $table->timestamps();

    //    $table->bigInteger('category_id')->unsigned()->nulleable();
            //unsignedBigInteger

    //    $table->foreign('category_id')->references('id')->on('categories');


    }}; //para agregar luego, hay que crear desde la consola: php artisan make:migration add_cover_to_products_table

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //para deshacer lo que se prueba// //para deshacer todo: migrate:rollback //
    {
        //Schema::dropIfExists(){

      //};
    }
}
