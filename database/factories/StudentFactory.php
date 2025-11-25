<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'student_number' => $this->faker->unique()->numerify('####'),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'grade_level' => 'Grade ' . $this->faker->numberBetween(1, 12),
            'email' => $this->faker->unique()->safeEmail,
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
        ];
    }
}
