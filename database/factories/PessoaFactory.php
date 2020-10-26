<?php

namespace Database\Factories;

use App\Models\Endereco;
use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PessoaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pessoa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'telefone' => $this->faker->phoneNumber,
            'CPF' => $this->faker->unique()->cpf,
            'nascimento' => $this->faker->date,
            'user_id' => User::factory()->create()->getKey()
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Pessoa $pessoa) {
            Endereco::factory()->create(['pessoa_id' => $pessoa->getKey()]);
        });
    }
}
