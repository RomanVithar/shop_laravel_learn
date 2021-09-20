<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsProductsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets_products', function (Blueprint $table) {
            $table->primary(['id_basket', 'id_product']);
            $table->foreignId('id_basket')->constrained('users')->onupdate('cascade');
            $table->foreignId('id_product')->constrained('products')->onupdate('cascade');
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
        Schema::dropIfExists('baskets_products');
    }
}
