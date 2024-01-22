<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('countries')->delete();
        $countries = array(
            array('id' => 1, 'code' => 'SK', 'name' => "Slovenská Republika", 'phonecode' => 421)
        );
        DB::table('countries')->insert($countries);
    }
}