<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert([
            'id' => 1,
            'name' => 'Norte',
        ]);

        DB::table('region')->insert([
            'id' => 2,
            'name' => 'Centro',
        ]);

        DB::table('region')->insert([
            'id' => 3,
            'name' => 'Sur',
        ]);

        DB::table('region')->insert([
            'id' => 4,
            'name' => 'Oriente',
        ]);

        DB::table('region')->insert([
            'id' => 5,
            'name' => 'Occidente',
        ]);

        $this->command->info('La tabla REGION se ha llenado con información.');
    }
}
