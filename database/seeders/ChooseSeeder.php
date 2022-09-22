<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choose_data = [
            'title' => 'test',
            'tags_one' => 'test tag 1',
            'tag_body_one' => 'test tag body 1',
            'tags_two' => 'test tag 2',
            'tag_body_two' => 'test tag body 2',
            'tags_three' => 'test tag 3',
            'tag_body_three' => 'test tag body 3',
            'tags_four' => 'test tag 4',
            'tag_body_four' => 'test tag body 4',

        ];
        DB::table('chooses')->insert($choose_data);
    }
}
