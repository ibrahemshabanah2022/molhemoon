<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MolhemoonInternship;

class MolhemoonInternshipSeeder extends Seeder
{
    public function run()
    {
        // Create 50 sample internships
        MolhemoonInternship::factory()->count(50)->create();
    }
}
