<?php

namespace Database\Seeders;

use App\Models\Plussallat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlussallatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plussallat::factory(15)->create();
    }
}
