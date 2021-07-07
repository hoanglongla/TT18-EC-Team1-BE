<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(false);
            $table->integer("price")->nullable(true);
            $table->integer("price_discount")->nullable(true)->default(null);
            $table->text("description")->nullable(false);
            $table->string("picture")->nullable(true);
            $table->integer("stock")->default(0);
            $table->string("amount")->nullable(true);
            $table->string("unit")->nullable(true);
            $table->integer("products_categories_id")->nullable(true);
            $table->softDeletes();
            $table->timestamps();;
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
