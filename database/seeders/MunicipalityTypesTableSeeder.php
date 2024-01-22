<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MunicipalityTypesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
    //
        DB::table('municipality_types')->delete();
        $municipality_types = array(
            array('id' => 1, 'name' => "Mesto"),
            array('id' => 2, 'name' => "Obec"),
            array('id' => 3, 'name' => "Mestská časť")
            );
        DB::table('municipality_types')->insert($municipality_types);
    }
}