<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable(false);
            $table->integer("tail_id")->nullable(true);
            $table->integer("staff_process_id")->nullable(true);
            $table->text("note")->nullable(true);
            $table->integer("status")->nullable(false)->default(0); //created
            $table->boolean("is_paid")->nullable(false)->default(false);
            $table->integer("payment_id")->nullable(true);
            $table->integer("delivery_status")->nullable(false)->default(0);
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
        Schema::dropIfExists('orders');
    }
}
