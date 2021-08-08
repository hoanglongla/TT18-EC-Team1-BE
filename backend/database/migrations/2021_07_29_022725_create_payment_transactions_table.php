<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable(false);
            $table->integer("payment_for_id")->nullable(false);
            $table->boolean("is_order")->nullable(false)->default(true);
            $table->integer("payment_type")->nullable(false)->default( 0);
            $table->integer("status")->nullable(false)->default(0);
            $table->integer("amount")->nullable(false)->default(0);
            $table->text("note")->nullable(true);
            $table->string("payment_title")->nullable(false);
            $table->integer("payment_information_id")->nullable(true);
            $table->boolean("is_refund")->default(false);
            $table->integer("refund_detail_id")->nullable(true);
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
        Schema::dropIfExists('payment_transactions');
    }
}
