<?php

namespace Database\Seeders;

use App\Models\Territory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerritorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Territory::factory(3)->create();
    }
}
