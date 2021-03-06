<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchofficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchoffice', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->boolean('addnit');
            $table->string('nit');
            $table->integer('zone')->unsigned();
            $table->string('address')->nullable($value = true);
            $table->boolean('status')->default(1);
            $table->foreignId('vendor_id');
            $table->foreignId('town_id');
            $table->foreign('vendor_id')->references('id')->on('vendor');
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
        Schema::dropIfExists('branchoffice');
    }
}
