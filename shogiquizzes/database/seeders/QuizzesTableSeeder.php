<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $param = [
           'section_id' => 1,
           'order' => 1,
           'image_src' => '/images/kyokumen/1-1.png',
           'correct' => '1-1正解',
       ];
       DB::table('quizzes')->insert($param);

       $param = [
           'section_id' => 1,
           'order' => 2,
           'image_src' => '/images/kyokumen/1-2.png',
           'correct' => '1-2正解',
       ];
       DB::table('quizzes')->insert($param);

       $param = [
           'section_id' => 2,
           'order' => 1,
           'image_src' => '/images/kyokumen/2-1.png',
           'correct' => '2-1正解',
       ];
       DB::table('quizzes')->insert($param);
       
       $param = [
           'section_id' => 2,
           'order' => 2,
           'image_src' => '/images/kyokumen/2-2.png',
           'correct' => '2-2正解',
       ];
       DB::table('quizzes')->insert($param);
       
       $param = [
           'section_id' => 3,
           'order' => 1,
           'image_src' => '/images/kyokumen/3-1.png',
           'correct' => '3-1正解',
       ];
       DB::table('quizzes')->insert($param);
       
       $param = [
           'section_id' => 3,
           'order' => 2,
           'image_src' => '/images/kyokumen/3-2.png',
           'correct' => '3-2正解',
       ];
       DB::table('quizzes')->insert($param);
       
       $param = [
           'section_id' => 3,
           'order' => 3,
           'image_src' => '/images/kyokumen/3-3.png',
           'correct' => '3-3正解',
       ];
       DB::table('quizzes')->insert($param);
    }
}
