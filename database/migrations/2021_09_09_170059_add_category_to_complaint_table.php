<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToComplaintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('complaint', function (Blueprint $table) {
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('complaint', function (Blueprint $table) {
            //
        });
    }
}
