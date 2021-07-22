<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_services', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable(false);
            $table->integer("tail_id")->nullable(true);
            $table->integer("staff_id")->nullable(true);
            $table->integer("service_id")->nullable(true);
            $table->dateTime("time_start")->nullable(true);
            $table->dateTime("time_end")->nullable(true);
            $table->text("note")->nullable(true);
            $table->integer("status")->nullable(false)->default(0); //created
            $table->boolean("is_paid")->nullable(false)->default(false);
            $table->integer("payment_id")->nullable(true);
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
        Schema::dropIfExists('book_services');
    }
}
