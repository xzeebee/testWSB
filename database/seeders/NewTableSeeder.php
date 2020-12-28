<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tab1')->insert([            
            'id'=>'1',
            'pole2'=>'wart211',
            'pole3'=>'wart311',
            'pole4'=>'wart411',
            'pole5'=>'wart511',
            'pole6'=>'wart611'

        ]);
        \DB::table('tab1')->insert([           
            'id'=>'2',
            'pole2'=>'wart222',
            'pole3'=>'wart332',
            'pole4'=>'wart442',
            'pole5'=>'wart552',
            'pole6'=>'wart662'

        ]);
    }
}
