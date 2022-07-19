<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
        ['bAddress' => '22 Deer Rd, London','branchNo' => 'B007'],
        ['bAddress' => '16 Agryl St, Aberdeen','branchNo' => 'B003'],
        ['bAddress' => '163 Main St, Glassgow','branchNo' => 'B005']
        ]; 
        DB::table('_branch')->insert($sampel);
}
}
