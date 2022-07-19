<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['staffNo' => 'SL21' , 'sName' => 'John White' , 
            'position' => 'Manager' , 'salary' => 30000 , 'branchNo' => 'B005'],
            ['staffNo' => 'SG37' , 'sName' => 'Ann Bech' , 
            'position' => 'Assisant' , 'salary' => 12000 , 'branchNo' => 'B003'],
            ['staffNo' => 'SG14' , 'sName' => 'David Ford' , 
            'position' => 'Supervisor' , 'salary' => 10000 , 'branchNo' => 'B003'],
            ['staffNo' => 'SA9' , 'sName' => 'Mary Home' , 
            'position' => 'Assistant' , 'salary' => 9000 , 'branchNo' => 'B007'],
            ['staffNo' => 'SG5' , 'sName' => 'Susan Brand' , 
            'position' => 'Manager' , 'salary' => 24000 , 'branchNo' => 'B003'],
            ['staffNo' => 'SL41' , 'sName' => 'Julie Lee' , 
            'position' => 'Assisant' , 'salary' => 9000 , 'branchNo' => 'B005']
        ];
        DB::table('_staff')->insert($sample);
    }
}
