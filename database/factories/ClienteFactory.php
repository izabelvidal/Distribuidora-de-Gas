<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Pessoa;
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
        return [
            'tipo' => $this->faker->randomElement(['consumidor', 'revendedor']),
            'pessoa_id' => Pessoa::factory()->create()->getKey()
        ];
    }
}
