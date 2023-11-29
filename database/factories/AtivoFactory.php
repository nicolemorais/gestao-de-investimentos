<?php

namespace Database\Factories;

use App\Models\Carteira;
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
            'nome_ativo' => $nome,
            'codigo' => $this->faker->word(3) . $this->faker->randomNumber(2),
            'descricao' => $this->faker->text,
            'valor' => $this->faker->numberBetween(0, 999.99),
            'id_carteira' => Carteira::pluck('id')->random(),
        ];
    }
}


