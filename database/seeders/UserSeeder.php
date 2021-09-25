<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('miumg2021'),
            'role_id' => 1,
            'branch_id' => 1,
        ]);

    }
}
