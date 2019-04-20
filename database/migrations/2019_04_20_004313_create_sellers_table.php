<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id_seller');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('commercial_name')->unique();
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('rif')->unique();
            $table->string('address')->nullable();
            $table->string('manager');
            $table->integer('phone_number');
            $table->boolean('status')->default(true);
            $table->integer('bank_account')->unique();
            $table->string('company_logo')->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
