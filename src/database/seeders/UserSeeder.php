<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'ADN Admin',
                'email' => 'admin@adn.task',
                'username' => 'admin',
                'msisdn' => '01752721841',
                'password' => Hash::make('qwerty')
            ]
        );
    }
}
