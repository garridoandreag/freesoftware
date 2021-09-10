<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BranchofficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branchoffice')->insert([
            'name' => '& Café Antigua',
            'zone' => '0',
            'address' => 'Calle de Los Nazarenos',
            'vendor_id' => 1,
            'town_id' => 17,
        ]);
    }
}
