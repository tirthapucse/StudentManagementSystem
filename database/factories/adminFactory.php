<?php

namespace Database\Factories;
use App\Models\admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class adminFactory extends Factory
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
