<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('invoices', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->unsignedBigInteger('lease_id');
//            $table->unsignedBigInteger('user_id');
//            $table->unsignedBigInteger('supply_id');
//            $table->integer('antaal');
//            $table->decimal('total');
//            $table->date('betaald_op')->nullable();
////            $table->dateTime('created_at');
//
//
//            $table->timestamps();
//
//            $table->foreign('user_id')
//                ->references('id')
//                ->on('users');
//
//            $table->foreign('supply_id')
//                ->references('id')
//                ->on('supplies');
//        });


        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lease_id');
            $table->date('betaald_op')->nullable();

            $table->timestamps();

            $table->foreign('lease_id')
                ->references('id')
                ->on('leases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
