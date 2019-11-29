<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lease_id');
<<<<<<< Updated upstream
=======
            $table->unsignedBigInteger('ticket_id');
            $table->unsignedBigInteger('supply_id');
>>>>>>> Stashed changes
            $table->integer('amount');
            $table->longText('description');
            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('lease_id')
                ->references('id')
                ->on('leases');

<<<<<<< Updated upstream


=======
            $table->foreign('ticket_id')
                ->references('id')
                ->on('tickets');

            $table->foreign('supply_id')
                ->references('id')
                ->on('supplies');
>>>>>>> Stashed changes

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_orders');
    }
}
