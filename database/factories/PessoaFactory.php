<?php

namespace Database\Factories;

use App\Models\Endereco;
use App\Models\Pessoa;
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
            'CPF' => $this->faker->unique()->cpf,
            'email' => $this->faker->unique()->email,
            'senha' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'nascimento' => $this->faker->date,

        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Pessoa $pessoa) {
            Endereco::factory()->create(['pessoa_id' => $pessoa->getKey()]);
        });
    }
}
