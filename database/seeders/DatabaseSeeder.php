<?php

namespace Database\Seeders;

use App\Models\Choose;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(ChooseSeeder::class);
        $this->call(ConfigSeeder::class);
        $this->call(AboutSeeder::class);
    }
}
