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
             //Atributos principales de la tabla

            $table->increments('id_product');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('bullets');
            $table->float('price',9,2);
            $table->string('SKU')->unique();
            $table->boolean('status')->default(true);
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('photo_3')->nullable();
            $table->integer('stock');

            //Campos para relaciones
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned()->default('1');
            $table->integer('seller_id')->unsigned();

            //Relaciones entre tablas

            $table->foreign('category_id')->references('id_category')->on('categories')
            ->onUpdate('cascade');

            $table->foreign('user_id')->references('id_user')->on('users')
            ->onUpdate('cascade');

            $table->foreign('seller_id')->references('id_seller')->on('sellers')
            ->onUpdate('cascade');



            $table->timestamps();
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
