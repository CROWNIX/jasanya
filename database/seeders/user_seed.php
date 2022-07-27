<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'email'=> 'admin@gmail.com',
                'name'=>'admin',
                'password'=> Hash::make('rahasia')
            ],
            
        ];
        DB::table('users')->insert($user);
    }
}
