<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepting_orders', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('accepted_order_at', 0);
            $table->foreignId('order_id');
            $table->foreignId('accepted_order_by_department_id');
            $table->foreignId('accepted_order_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accepting_orders');
    }
}
