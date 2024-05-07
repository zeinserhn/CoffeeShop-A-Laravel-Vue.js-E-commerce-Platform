<?php

namespace Database\Seeders;

use App\Models\Journale;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JournaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Journale::factory()->count(10)->create();
    }
}
