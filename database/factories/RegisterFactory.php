<?php

namespace Database\Factories;

use App\Models\Register;
use App\Models\Student;
use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Register>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Register::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),  // Creates a related Student via StudentFactory
            'course_id' => Courses::factory(),    // Creates a related Course via CourseFactory
        ];
    }
}
