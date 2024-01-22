<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DistrictsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
    //
        DB::table('districts')->delete();
        $districts = array(
            array('id' => 1, 'name' => "Bánovce nad Bebravou", 'region_id' => 6),
            array('id' => 2, 'name' => "Banská Bystrica", 'region_id' => 1),
            array('id' => 3, 'name' => "Banská Štiavnica", 'region_id' => 1),
            array('id' => 4, 'name' => "Bardejov", 'region_id' => 5),
            array('id' => 5, 'name' => "Bratislava I", 'region_id' => 2),
            array('id' => 6, 'name' => "Bratislava II", 'region_id' => 2),
            array('id' => 7, 'name' => "Bratislava III", 'region_id' => 2),
            array('id' => 8, 'name' => "Bratislava IV", 'region_id' => 2),
            array('id' => 9, 'name' => "Bratislava V", 'region_id' => 2),
            array('id' => 10, 'name' => "Brezno", 'region_id' => 1),
            array('id' => 11, 'name' => "Bytča", 'region_id' => 8),
            array('id' => 12, 'name' => "Čadca", 'region_id' => 8),
            array('id' => 13, 'name' => "Detva", 'region_id' => 1),
            array('id' => 14, 'name' => "Dolný Kubín", 'region_id' => 8),
            array('id' => 15, 'name' => "Dunajská Streda", 'region_id' => 7),
            array('id' => 16, 'name' => "Galanta", 'region_id' => 7),
            array('id' => 17, 'name' => "Gelnica", 'region_id' => 3),
            array('id' => 18, 'name' => "Hlohovec", 'region_id' => 7),
            array('id' => 19, 'name' => "Humenné", 'region_id' => 5),
            array('id' => 20, 'name' => "Ilava", 'region_id' => 6),
            array('id' => 21, 'name' => "Kežmarok", 'region_id' => 5),
            array('id' => 22, 'name' => "Komárno", 'region_id' => 4),
            array('id' => 23, 'name' => "Košice I", 'region_id' => 3),
            array('id' => 24, 'name' => "Košice II", 'region_id' => 3),
            array('id' => 25, 'name' => "Košice III", 'region_id' => 3),
            array('id' => 26, 'name' => "Košice IV", 'region_id' => 3),
            array('id' => 27, 'name' => "Košice - okolie", 'region_id' => 3),
            array('id' => 28, 'name' => "Krupina", 'region_id' => 1),
            array('id' => 29, 'name' => "Kysucké Nové Mesto", 'region_id' => 8),
            array('id' => 30, 'name' => "Levice", 'region_id' => 4),
            array('id' => 31, 'name' => "Levoča", 'region_id' => 5),
            array('id' => 32, 'name' => "Liptovský Mikuláš", 'region_id' => 8),
            array('id' => 33, 'name' => "Lučenec", 'region_id' => 1),
            array('id' => 34, 'name' => "Malacky", 'region_id' => 2),
            array('id' => 35, 'name' => "Martin", 'region_id' => 8),
            array('id' => 36, 'name' => "Medzilaborce", 'region_id' => 5),
            array('id' => 37, 'name' => "Michalovce", 'region_id' => 3),
            array('id' => 38, 'name' => "Myjava", 'region_id' => 6),
            array('id' => 39, 'name' => "Námestovo", 'region_id' => 8),
            array('id' => 40, 'name' => "Nitra", 'region_id' => 4),
            array('id' => 41, 'name' => "Nové Mesto nad Váhom", 'region_id' => 6),
            array('id' => 42, 'name' => "Nové Zámky", 'region_id' => 4),
            array('id' => 43, 'name' => "Partizánske", 'region_id' => 6),
            array('id' => 44, 'name' => "Pezinok", 'region_id' => 2),
            array('id' => 45, 'name' => "Piešťany", 'region_id' => 7),
            array('id' => 46, 'name' => "Poltár", 'region_id' => 1),
            array('id' => 47, 'name' => "Poprad", 'region_id' => 5),
            array('id' => 48, 'name' => "Považská Bystrica", 'region_id' => 6),
            array('id' => 49, 'name' => "Prešov", 'region_id' => 5),
            array('id' => 50, 'name' => "Prievidza", 'region_id' => 6),
            array('id' => 51, 'name' => "Púchov", 'region_id' => 6),
            array('id' => 52, 'name' => "Revúca", 'region_id' => 1),
            array('id' => 53, 'name' => "Rimavská Sobota", 'region_id' => 1),
            array('id' => 54, 'name' => "Rožňava", 'region_id' => 3),
            array('id' => 55, 'name' => "Ružomberok", 'region_id' => 8),
            array('id' => 56, 'name' => "Sabinov", 'region_id' => 5),
            array('id' => 57, 'name' => "Senec", 'region_id' => 2),
            array('id' => 58, 'name' => "Senica", 'region_id' => 7),
            array('id' => 59, 'name' => "Skalica", 'region_id' => 7),
            array('id' => 60, 'name' => "Snina", 'region_id' => 5),
            array('id' => 61, 'name' => "Sobrance", 'region_id' => 3),
            array('id' => 62, 'name' => "Spišská Nová Ves", 'region_id' => 3),
            array('id' => 63, 'name' => "Stará Ľubovňa", 'region_id' => 5),
            array('id' => 64, 'name' => "Stropkov", 'region_id' => 5),
            array('id' => 65, 'name' => "Svidník", 'region_id' => 5),
            array('id' => 66, 'name' => "Šaľa", 'region_id' => 4),
            array('id' => 67, 'name' => "Topoľčany", 'region_id' => 4),
            array('id' => 68, 'name' => "Trebišov", 'region_id' => 3),
            array('id' => 69, 'name' => "Trenčín", 'region_id' => 6),
            array('id' => 70, 'name' => "Trnava", 'region_id' => 7),
            array('id' => 71, 'name' => "Turčianske Teplice", 'region_id' => 8),
            array('id' => 72, 'name' => "Tvrdošín", 'region_id' => 8),
            array('id' => 73, 'name' => "Veľký Krtíš", 'region_id' => 1),
            array('id' => 74, 'name' => "Vranov nad Topľou", 'region_id' => 5),
            array('id' => 75, 'name' => "Zlaté Moravce", 'region_id' => 4),
            array('id' => 76, 'name' => "Zvolen", 'region_id' => 1),
            array('id' => 77, 'name' => "Žarnovica", 'region_id' => 1),
            array('id' => 78, 'name' => "Žiar nad Hronom", 'region_id' => 1),
            array('id' => 79, 'name' => "Žilina", 'region_id' => 8)
        );
        DB::table('districts')->insert($districts);
    }
}