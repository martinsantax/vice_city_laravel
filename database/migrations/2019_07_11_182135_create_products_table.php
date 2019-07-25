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
        Schema::create('products', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->string('name', 50); //->default();   para cuando no tenes que poner//

         $table->unsignedBigInteger('category_id');
         $table->foreign('category_id')->references('id')->on('categories');

         $table->unsignedBigInteger('size_id');
         $table->foreign('size_id')->references('id')->on('sizes');

         $table->unsignedBigInteger('colour_id')->nulleable();
         $table->foreign('colour_id')->references('id')->on('colours');

         $table->string('description', 255)->nulleable();
         $table->decimal('price',6,2);
         $table->float('stock',6);
         $table->string('image', 150);
         $table->timestamps();// TODO: borrar productos.
     });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
     Schema::dropIfExists('products');
 }
}
