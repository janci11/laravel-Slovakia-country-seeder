<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegionsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
    //
        DB::table('regions')->delete();
        $regions = array(
            array('id' => 1, 'name' => "Banskobystrický", 'country_id' => 1),
            array('id' => 2, 'name' => "Bratislavský", 'country_id' => 1),
            array('id' => 3, 'name' => "Košický", 'country_id' => 1),
            array('id' => 4, 'name' => "Nitriansky", 'country_id' => 1),
            array('id' => 5, 'name' => "Prešovský", 'country_id' => 1),
            array('id' => 6, 'name' => "Trenčiansky", 'country_id' => 1),
            array('id' => 7, 'name' => "Trnavský", 'country_id' => 1),
            array('id' => 8, 'name' => "Žilinský", 'country_id' => 1)
            );
        DB::table('regions')->insert($regions);
    }
}