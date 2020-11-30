<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flowers', function (Blueprint $table) {
            $table->unsignedBigInteger('flower_category_id');
            
            $table->foreign('flower_category_id')->references('id')->on('flower_categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flowers', function (Blueprint $table) {
            $table->dropForeign(['flower_category_id']);
        });
    }
}
