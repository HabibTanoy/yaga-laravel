<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $get_touch = [
            'name' => 'get_touch',
            'config' => json_encode([
                'address' => 'test',
                'number' => +00677777,
                'email' => 'test@gmail.com'
            ])
        ];
        DB::table('config')->insert($get_touch);

        $project_complete = [
            'name' => 'project_done',
            'config' => json_encode([
                'client' => 67654,
                'project' => 87864,
                'awards' => 7887575
            ])
        ];
        DB::table('config')->insert($project_complete);
    }
}
