<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branch')->insert([
            'name' => 'Diaco Central',
            'address' => '7a. Ave. 7-61 Zona 4, 3er. Nivel,Edificio del Registro Mercantil.',
            'directorate_id' => 1,
        ]);
    }
}
