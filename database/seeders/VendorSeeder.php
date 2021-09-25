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
            'registeredname' => '& Café, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Pollo Pinulito',
            'registeredname' => 'Pollo Pinulito, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => '7 Caldos',
            'registeredname' => '7 Caldos, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Al Macarone',
            'registeredname' => 'Al Macarone, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'San Martín',
            'registeredname' => 'San Martín, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Anfora',
            'registeredname' => 'Anfora, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Applebees',
            'registeredname' => 'Applebees, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Kentucky Fried Chicken',
            'registeredname' => 'Kentucky Fried Chicken, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Pollo Brujo',
            'registeredname' => 'Pollo Brujo, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Fotolab',
            'registeredname' => 'Fotolab, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Pizza Hut',
            'registeredname' => 'Pizza Hut, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'McDonald\'s',
            'registeredname' => 'McDonald\'s, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Subway',
            'registeredname' => 'Subway, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Domino\'s',
            'registeredname' => 'Domino\'s, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Burguer King',
            'registeredname' => 'Burguer King, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Cargo Expreso',
            'registeredname' => 'Cargo Expreso, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Farmacia Carolina & H',
            'registeredname' => 'Farmacia Carolina & H, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Farmacia Galeno',
            'registeredname' => 'Farmacia Galeno, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Intelaf',
            'registeredname' => 'Intelaf, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Hotel y Parque Acuático Longarone',
            'registeredname' => 'Hotel y Parque Acuático Longarone, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

        DB::table('vendor')->insert([
            'name' => 'Steren',
            'registeredname' => 'Steren, S.A.',
            'nit' => rand(10000000, 99999999),
        ]);

    }
}
