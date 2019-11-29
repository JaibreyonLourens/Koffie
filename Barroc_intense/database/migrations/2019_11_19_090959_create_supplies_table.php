<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->string('name');
<<<<<<< Updated upstream
            $table->decimal('price');
            $table->decimal('units');
            $table->boolean('available');
=======
            $table->string('ean_nr');
            $table->string('description');
            $table->decimal('price_per_unit');
            $table->integer('in_stock');
=======
            $table->string('supply_name');
            $table->integer('price');
>>>>>>> master
>>>>>>> Stashed changes
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
        Schema::dropIfExists('supplies');
    }
}
