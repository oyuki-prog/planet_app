<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'ja_name' => '水星',
                'en_name' => 'MERCURY',
                'radius' => '2439',
                'weight' => '3310'
            ],
            [
                'ja_name' => '金星',
                'en_name' => 'VENUS',
                'radius' => '6052',
                'weight' => '48700'
            ]
        ];
        DB::table('planets')->insert($param);
    }
}
