<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'General'
        ]);

        DB::table('category')->insert([
            'name' => 'Reclamo por garantía'
        ]);

        DB::table('category')->insert([
            'name' => 'Precios altos'
        ]);

        DB::table('category')->insert([
            'name' => 'Publicidad engañosa'
        ]);

        DB::table('category')->insert([
            'name' => 'Devolución de lo pagado'
        ]);

        DB::table('category')->insert([
            'name' => 'Producto en mal estado'
        ]);

        DB::table('category')->insert([
            'name' => 'Mal servicio'
        ]);
    }
}
