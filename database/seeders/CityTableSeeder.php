<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        $cities = array(
            array('id' => '1','name' => 'Mansoura','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'Mahala','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','name' => '6 October','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','name' => 'Nasr City','created_at' => NULL,'updated_at' => NULL),
        );
        DB::table('cities')->insert($cities);
    }
}
