<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Town;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Town::factory()->count(15)->create();
    }
}
