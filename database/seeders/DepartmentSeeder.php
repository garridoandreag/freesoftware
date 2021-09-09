<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* NORTE */
        DB::table('department')->insert([
            'name' => 'Alta Verapaz',
            'region_id' => 1,
        ]);        

        DB::table('department')->insert([
            'name' => 'Baja Verapaz',
            'region_id' => 1,
        ]); 
        
        DB::table('department')->insert([
            'name' => 'Petén',
            'region_id' => 1,
        ]); 

        DB::table('department')->insert([
            'name' => 'Quiché',
            'region_id' => 1,
        ]); 

        DB::table('department')->insert([
            'name' => 'Sololá',
            'region_id' => 1,
        ]); 


        /* CENTRO */
        DB::table('department')->insert([
            'name' => 'Guatemala',
            'region_id' => 2,
        ]);

        DB::table('department')->insert([
            'name' => 'Chimaltenango',
            'region_id' => 2,
        ]);

        DB::table('department')->insert([
            'name' => 'Sacatepéquez',
            'region_id' => 2,
        ]);

        /* SUR */

        DB::table('department')->insert([
            'name' => 'Jutiapa',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Santa Rosa',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Escuintla',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Suchitepéquez',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Retalhuleu',
            'region_id' => 3,
        ]);

        /* ORIENTE */
        DB::table('department')->insert([
            'name' => 'Izabal',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'Zacapa',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'Chiquimula',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'Jalapa',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'El progreso',
            'region_id' => 4,
        ]);

        /* OCCIDENTE */
        DB::table('department')->insert([
            'name' => 'Quetzaltenango',
            'region_id' => 5,
        ]);

        DB::table('department')->insert([
            'name' => 'Totonicapán',
            'region_id' => 5,
        ]);

        DB::table('department')->insert([
            'name' => 'Huehuetenango',
            'region_id' => 5,
        ]);
        
        DB::table('department')->insert([
            'name' => 'San Marcos',
            'region_id' => 5,
        ]);

        $this->command->info('La tabla DEPARTMENT se ha llenado con información.');
    }
}
