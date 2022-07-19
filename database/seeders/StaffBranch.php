<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class StaffBranch extends Seeder
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
            'position' => 'Manager' , 'salary' => 30000 , 'branchNo' => 'B005' , 'bAddress' => '22 Deer Rd, London'],
            ['staffNo' => 'SG37' , 'sName' => 'Ann Bech' , 
            'position' => 'Assisant' , 'salary' => 12000 , 'branchNo' => 'B003' , 'bAddress' => '163 Main St. Glassgow'],
            ['staffNo' => 'SG14' , 'sName' => 'David Ford' , 
            'position' => 'Supervisor' , 'salary' => 10000 , 'branchNo' => 'B003' , 'bAddress' => '163 Main St. Glassgow'],
            ['staffNo' => 'SA9' , 'sName' => 'Mary Home' , 
            'position' => 'Assistant' , 'salary' => 9000 , 'branchNo' => 'B007' , 'bAddress' => '16 Argyl St ,Aberdoen'],
            ['staffNo' => 'SG5' , 'sName' => 'Susan Brand' , 
            'position' => 'Manager' , 'salary' => 24000 , 'branchNo' => 'B003' , 'bAddress' => '163 Main St. Glassgow'],
            ['staffNo' => 'SL41' , 'sName' => 'Julie Lee' , 
            'position' => 'Assisant' , 'salary' => 9000 , 'branchNo' => 'B005' , 'bAddress' => '22 Deer Rd, London'],
        ];
        DB::table('_staff_branch')->insert($sample);
    }
}
