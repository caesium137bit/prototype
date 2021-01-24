<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Section;

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
           'title' => '角換わり',
       ];
       DB::table('sections')->insert($param);

       $param = [
           'title' => '横歩取り',
       ];
       DB::table('sections')->insert($param);

       $param = [
           'title' => '石田流',
       ];
       DB::table('sections')->insert($param);
    }
}
