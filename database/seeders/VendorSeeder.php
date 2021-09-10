<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendor')->insert([
            'name' => '& Café',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => '100 Montaditos',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => '7 Caldos',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Al Macarone',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'American Doughnuts',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Anfora',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Applebees',
            'nit' => rand(10000000, 99999999),
        ]);
    }
}
