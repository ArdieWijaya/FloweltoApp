<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->unsignedBigInteger('flower_id');
            $table->unsignedBigInteger('transaction_id');
            
            $table->foreign('flower_id')->references('id')->on('flowers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->dropForeign(['flower_id']);
            $table->dropForeign(['transaction_id']);
        });
    }
}
