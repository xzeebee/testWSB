<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([            
            'name'=>'Anna Nowak',
            'email'=>'anowak@wp.pl',
            'password'=>bcrypt('password'),
            'status'=>'on',
            'type'=>'student'

        ]);
        \DB::table('users')->insert([           
            'name'=>'Stefan Żeromski',
            'email'=>'s.zeromski@wp.pl',
            'password'=>bcrypt('password1'),
            'status'=>'on',
            'type'=>'teacher'

        ]);
    }
}
