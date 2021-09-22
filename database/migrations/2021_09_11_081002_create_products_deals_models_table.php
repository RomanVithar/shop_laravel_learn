<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsDealsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_deals', function (Blueprint $table) {
            $table->primary(['deal_id', 'product_id']);
            $table->foreignId('deal_id')->constrained('deals')->onupdate('cascade');
            $table->foreignId('product_id')->constrained('products')->onupdate('cascade');
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
        Schema::dropIfExists('products_deals');
    }
}
