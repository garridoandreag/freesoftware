<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoratebranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->foreignId('directorate_id');
            $table->foreign('directorate_id')->references('id')->on('directorate');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('directoratebranch');
    }
}
