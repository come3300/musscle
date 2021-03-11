<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mussle;

class MussclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Models\Musscle::factory()->count(15)->create(); 
    }
}
