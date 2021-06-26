<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->delete();
        $hotels = array(
            array('id' => '1','name' => 'A', 'rate' => 5, 'pricePerDay' => 1000, 'roomAmenities' => 'bla, bla, bla', 'discount' => 10, 'city_id' => 1, 'provider_id' => 1, 'created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'B', 'rate' => 2, 'pricePerDay' => 700, 'roomAmenities' => 'bla, bla, bla', 'discount' => 12, 'city_id' => 2, 'provider_id' => 2,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','name' => 'C', 'rate' => 3, 'pricePerDay' => 900, 'roomAmenities' => 'bla, bla, bla', 'discount' => 15, 'city_id' => 3, 'provider_id' => 1,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','name' => 'D', 'rate' => 5, 'pricePerDay' => 1150, 'roomAmenities' => 'bla, bla, bla', 'discount' => 0, 'city_id' => 3, 'provider_id' => 2,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','name' => 'E', 'rate' => 5, 'pricePerDay' => 1000, 'roomAmenities' => 'bla, bla, bla', 'discount' => 10, 'city_id' => 4, 'provider_id' => 1, 'created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','name' => 'F', 'rate' => 2, 'pricePerDay' => 700, 'roomAmenities' => 'bla, bla, bla', 'discount' => 0, 'city_id' => 2, 'provider_id' => 2,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','name' => 'G', 'rate' => 3, 'pricePerDay' => 900, 'roomAmenities' => 'bla, bla, bla', 'discount' => 15, 'city_id' => 4, 'provider_id' => 1,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','name' => 'H', 'rate' => 5, 'pricePerDay' => 1150, 'roomAmenities' => 'bla, bla, bla', 'discount' => 0, 'city_id' => 1, 'provider_id' => 2,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','name' => 'I', 'rate' => 5, 'pricePerDay' => 1000, 'roomAmenities' => 'bla, bla, bla', 'discount' => 10, 'city_id' => 1, 'provider_id' => 1, 'created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','name' => 'J', 'rate' => 2, 'pricePerDay' => 700, 'roomAmenities' => 'bla, bla, bla', 'discount' => 0, 'city_id' => 3, 'provider_id' => 2,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '11','name' => 'K', 'rate' => 3, 'pricePerDay' => 900, 'roomAmenities' => 'bla, bla, bla', 'discount' => 15, 'city_id' => 4, 'provider_id' => 1,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','name' => 'L', 'rate' => 5, 'pricePerDay' => 1150, 'roomAmenities' => 'bla, bla, bla', 'discount' => 0, 'city_id' => 2, 'provider_id' => 2,'created_at' => NULL,'updated_at' => NULL),
        );
        DB::table('hotels')->insert($hotels);
    }
}
