<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB,Hash;
class firstUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'status'=> '1',
            'role'=> '1',
            'name' => 'Luis Cordova Olavarria',
            'email' => 'hijosdelatomo@gmail.com',
            'password' => Hash::make('password'),
            'permissions'=> json_encode(['all'=> true])
        ]);
    }
}
