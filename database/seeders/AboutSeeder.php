<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abouts = [
            'title' => 'test 2',
            'body' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet',
            'number' => '99999999',
            'image' => 'storage/2022_09_21_09_42_39_56646.png'
        ];
        DB::table('abouts')->insert($abouts);
    }
}
