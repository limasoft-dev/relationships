<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $estados = ['Feito', 'EmCurso', 'Em Projeto'];

        return [
            'nome' => $this->faker->sentence,
            'estado' => $this->faker->randomElement($estados),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
