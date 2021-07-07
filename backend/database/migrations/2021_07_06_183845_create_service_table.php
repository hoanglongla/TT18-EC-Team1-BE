<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string("name")->nullable(false);
            $table->integer("price")->nullable(true);
            $table->integer("price_discount")->nullable(true);
            $table->text("description")->nullable(false);
            $table->string("picture")->nullable(true);
            $table->integer("time_estimate")->default(0)->nullable(true);
            $table->boolean("can_book_online")->default(true);
            $table->integer("sex_type")->default(0);//all
            $table->integer("services_categories_id")->nullable(true);
            $table->softDeletes();
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
        Schema::dropIfExists('services');
    }
}
