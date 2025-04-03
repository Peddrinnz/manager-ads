<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'cpf' => $this->faker->unique()->numerify('###.###.###-##'),
            'name' => $this->faker->name(),
            'date_of_birth' => $this->faker->date(),
        ];
    }
}
