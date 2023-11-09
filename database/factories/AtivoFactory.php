<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ativo>
 */
class AtivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>"
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();

        return [
            'nomeAtivo' => $nome,
            'codigo' => $this->faker->word(3) . $this->faker->randomNumber(2),
            'descricaoAtivo' => $this->faker->text,
            'valorAtivo' => $this->faker->numberBetween(0, 999.99),
            'id_user' => User::pluck('id')->random(),
        ];
    }
}


