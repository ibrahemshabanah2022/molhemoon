<?php

namespace Database\Factories;

use App\Models\MolhemoonInternship;
use Illuminate\Database\Eloquent\Factories\Factory;

class MolhemoonInternshipFactory extends Factory
{
    protected $model = MolhemoonInternship::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'experience_needed' => $this->faker->sentence,
            'career_level' => $this->faker->randomElement(['Entry Level', 'Mid Level', 'Senior Level', 'Executive']),
            'education_level' => $this->faker->randomElement(['High School', 'Bachelor Degree', 'Master Degree', 'Ph.D.', 'Not Specified']),
            'salary' => $this->faker->randomFloat(2, 30000, 100000),
            'description' => $this->faker->paragraph,
            'requirements' => $this->faker->paragraph,
        ];
    }
}
