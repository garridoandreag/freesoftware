<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('summary');
            $table->multiLineString('description');
            $table->string('autor');
            $table->boolean('status');
            $table->foreignId('commerce_id');
            $table->foreignId('branchoffice_id');
            $table->foreignId('department_id');
            $table->foreignId('town_id');
            $table->foreign('commerce_id')->references('id')->on('commerce');
            $table->foreign('branchoffice_id')->references('id')->on('branchoffice');
            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('town_id')->references('id')->on('town');
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
        Schema::dropIfExists('complaint');
    }
}
