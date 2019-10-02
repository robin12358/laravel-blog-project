<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genders')->insert([

                 'id'=>'1', 

                 'gender_name'=>'Male', 
           ]);
           \DB::table('genders')->insert([

                'id'=>'2', 

                'gender_name'=>'Female', 
           ]); \DB::table('genders')->insert([

                'id'=>'3', 

                'gender_name'=>'Other', 
           ]);
    }
}
