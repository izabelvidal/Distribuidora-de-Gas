<?php

namespace Database\Factories;

use App\Models\Funcionario;
use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funcionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admissao' => $this->faker->date,
            'pessoa_id' => Pessoa::factory()->create(['user_id' => User::factory()->create(['tipo' => 'funcionario'])->getKey()])->getKey()
        ];
    }
}
