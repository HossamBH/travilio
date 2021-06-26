<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->delete();
        $providers = array(
            array('id' => '1','name' => 'A','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'B','created_at' => NULL,'updated_at' => NULL),
        );
        DB::table('providers')->insert($providers);
    }
}
