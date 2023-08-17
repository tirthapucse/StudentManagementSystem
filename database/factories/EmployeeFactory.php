<?php

namespace Database\Factories;

use App\Models\Employee1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->phoneNumber,
            'image' => $this->faker->imageUrl(200, 200),
            'designation' => $this->faker->jobTitle,
            'company_name' => $this->faker->company,
        ];
    }
}
