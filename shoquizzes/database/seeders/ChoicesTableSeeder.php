<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Choice;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $param = [
           'quiz_id' => 1,
           'choice' => '1-1不正解1',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 1,
           'choice' => '1-1正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 1,
           'choice' => '1-1不正解2',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 2,
           'choice' => '1-2正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 2,
           'choice' => '1-2不正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 3,
           'choice' => '2-1不正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 3,
           'choice' => '2-1正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 4,
           'choice' => '2-2正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 4,
           'choice' => '2-2不正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 5,
           'choice' => '3-1正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 5,
           'choice' => '3-1不正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 6,
           'choice' => '3-2正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 6,
           'choice' => '3-2不正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 7,
           'choice' => '3-3不正解',
       ];
       DB::table('choices')->insert($param);
       
       $param = [
           'quiz_id' => 7,
           'choice' => '3-3正解',
       ];
       DB::table('choices')->insert($param);
    }
}
