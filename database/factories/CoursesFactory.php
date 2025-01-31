<?php

namespace Database\Factories;

use App\Models\Courses;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Courses::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 500, 1000),
            'duration' => $this->faker->randomElement([60, 90, 180]),
            'max_students' => $this->faker->numberBetween(10, 50),
            'teacher_id' => Teacher::factory(),
        ];
    }
}