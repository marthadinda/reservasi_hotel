<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kamar;

class KamarSeeder extends Seeders
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {
        Kamar::factory(10)->create();
    }
}