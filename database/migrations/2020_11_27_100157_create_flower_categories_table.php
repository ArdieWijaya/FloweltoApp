<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowerCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower_categories', function (Blueprint $table) {
            $table->id();
            $table->string('flowerCategoriesName');
            $table->string('flowerCategoriesImage')->default('https://www.indiaspora.org/wp-content/uploads/2018/10/image-not-available.jpg');
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
        Schema::dropIfExists('flower_categories');
    }
}
