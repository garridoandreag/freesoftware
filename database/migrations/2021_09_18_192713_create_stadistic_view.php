<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStadisticView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        create VIEW complaintview AS(
            SELECT region.name region
            ,region.id region_id
            ,department.name department
            ,complaint.department_id department_id
            ,town.name town
            ,complaint.town_id town_id
            ,vendor.name vendor
            ,complaint.vendor_id vendor_id
            ,complaint.code codigo
            ,complaint.summary summary
            ,complaint.description description
            ,complaint.created_at fecha
            ,category.name category
            ,complaint.status status
            FROM complaint 
            INNER JOIN department ON complaint.department_id = department.id
            INNER JOIN vendor ON complaint.vendor_id = vendor.id
            INNER JOIN town ON complaint.town_id = town.id
            INNER JOIN region ON department.region_id = region.id
            INNER JOIN category ON complaint.category_id = category.id);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stadistic_view');
    }
}
