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
            'code' => 'GT-AV',
            'region_id' => 1,
        ]);        

        DB::table('department')->insert([
            'name' => 'Baja Verapaz',
            'code' => 'GT-BV',
            'region_id' => 1,
        ]); 
        
        DB::table('department')->insert([
            'name' => 'Petén',
            'code' => 'GT-PE',
            'region_id' => 1,
        ]); 

        DB::table('department')->insert([
            'name' => 'Quiché',
            'code' => 'GT-QC',
            'region_id' => 1,
        ]); 

        DB::table('department')->insert([
            'name' => 'Sololá',
            'code' => 'GT-SO',
            'region_id' => 1,
        ]); 


        /* CENTRO */
        DB::table('department')->insert([
            'name' => 'Guatemala',
            'code' => 'GT-GU',
            'region_id' => 2,
        ]);

        DB::table('department')->insert([
            'name' => 'Chimaltenango',
            'code' => 'GT-CM',
            'region_id' => 2,
        ]);

        DB::table('department')->insert([
            'name' => 'Sacatepéquez',
            'code' => 'GT-SA',
            'region_id' => 2,
        ]);

        /* SUR */

        DB::table('department')->insert([
            'name' => 'Jutiapa',
            'code' => 'GT-JU',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Santa Rosa',
            'code' => 'GT-SR',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Escuintla',
            'code' => 'GT-ES',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Suchitepéquez',
            'code' => 'GT-SU',
            'region_id' => 3,
        ]);

        DB::table('department')->insert([
            'name' => 'Retalhuleu',
            'code' => 'GT-RE',
            'region_id' => 3,
        ]);

        /* ORIENTE */
        DB::table('department')->insert([
            'name' => 'Izabal',
            'code' => 'GT-IZ',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'Zacapa',
            'code' => 'GT-ZA',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'Chiquimula',
            'code' => 'GT-CQ',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'Jalapa',
            'code' => 'GT-JA',
            'region_id' => 4,
        ]);

        DB::table('department')->insert([
            'name' => 'El progreso',
            'code' => 'GT-PR',
            'region_id' => 4,
        ]);

        /* OCCIDENTE */
        DB::table('department')->insert([
            'name' => 'Quetzaltenango',
            'code' => 'GT-QZ',
            'region_id' => 5,
        ]);

        DB::table('department')->insert([
            'name' => 'Totonicapán',
            'code' => 'GT-TO',
            'region_id' => 5,
        ]);

        DB::table('department')->insert([
            'name' => 'Huehuetenango',
            'code' => 'GT-HU',
            'region_id' => 5,
        ]);
        
        DB::table('department')->insert([
            'name' => 'San Marcos',    
            'code' => 'GT-SM',
            'region_id' => 5,
        ]);

        $this->command->info('La tabla DEPARTMENT se ha llenado con información.');
    }
}
