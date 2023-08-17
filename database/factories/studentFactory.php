<?php

namespace Database\Factories;
use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'mobile' => $this->faker->phoneNumber,
            'image' => $this->faker->imageUrl(200, 200),
            'designation' => $this->faker->jobTitle,
            'company_name' => $this->faker->company,
        ];
    }
}
