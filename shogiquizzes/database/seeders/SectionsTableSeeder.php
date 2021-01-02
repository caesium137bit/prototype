<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $param = [
           'name' => '角換わり',
       ];
       DB::table('sections')->insert($param);

       $param = [
           'name' => '横歩取り',
       ];
       DB::table('sections')->insert($param);

       $param = [
           'name' => '石田流',
       ];
       DB::table('sections')->insert($param);
    }
}
