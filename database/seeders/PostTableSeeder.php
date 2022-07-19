<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['title' => 'Asssalam Juara' , 'content' => 'Assalaam Studio'],
            ['title' => 'Asssalam Berkurban' , 'content' => 'Assalaam Studio'],
            ['title' => 'Asssalam bersholawat' , 'content' => 'Assalaam Studio']
        ];

        DB::table('posts')->insert($sampel);
    }
}
