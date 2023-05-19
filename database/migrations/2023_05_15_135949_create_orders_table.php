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
            $table->unsignedBigInteger('customer_id');
            $table->ipAddress('user_ip')->nullable();
            $table->unsignedBigInteger('payment_id');
            $table->string('invoice_no');
            $table->string('total');
            $table->string('subtotal');
            $table->integer('coupon_discount')->nullable();
            $table->boolean('is_completed')->nullable();

            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

                $table->foreign('payment_id')
                ->references('id')->on('payments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
