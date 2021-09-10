<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Guatemala  */
        DB::table('town')->insert([
            'name' => 'Amatitlán',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Chinautla',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Chuarrancho',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Ciudad de Guatemala',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Fraijanes',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Mixco',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Palencia',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San José del Golfo',
            'department_id' => 6,
        ]);

        /*ALTA VERAPAZ */
        DB::table('town')->insert([
            'name' => 'Chahal',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Chisec',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Cobán',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Fray Bartolomé de las Casas',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'La Tinta',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Lanquín',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Panzós',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => '	Raxruhá',
            'department_id' => 1,
        ]);

        $this->command->info('La tabla TOWN se ha llenado con información.');

    }
}
