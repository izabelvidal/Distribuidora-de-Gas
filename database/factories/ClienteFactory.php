<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create(['tipo' => 'cliente']);
        $pessoa = Pessoa::factory()->create(['user_id' => $user->getKey()]);
        return [
            'tipo' => $this->faker->randomElement(['consumidor', 'revendedor']),
            'pessoa_id' => $pessoa->getKey(),
        ];
    }
}
