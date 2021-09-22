<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProductsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_products', function (Blueprint $table) {
            $table->primary(['user_id', 'product_id']);
            $table->foreignId('user_id')->references('id')
                ->on('users')->onupdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('product_id')->references('id')
                ->on('products')->onupdate('cascade')
                ->onDelete('cascade');
            $table->integer('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_products');
    }
}
