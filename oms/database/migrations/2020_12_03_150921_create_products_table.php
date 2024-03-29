<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->integer('code');
            $table->string('name');
            $table->string('name_jp')->nullable();
            $table->integer('type');
            $table->double('price')->nullable();
            $table->string('unit')->nullable();
            $table->double('usable_rate')->nullable();
            $table->string('provider')->nullable();
            $table->dateTimeTz('min_valid_at', 0);
            $table->dateTimeTz('max_valid_at', 0);
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
