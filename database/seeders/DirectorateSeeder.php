<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DirectorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directorate')->insert([
            'name' => 'Diaco',
            'logo' => 'logo.png'
        ]); 
    }
}
