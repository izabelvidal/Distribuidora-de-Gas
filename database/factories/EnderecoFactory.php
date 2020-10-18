<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rua' => $this->faker->streetName,
            'bairro' => $this->faker->streetName,
            'cidade' => $this->faker->city,
            'numero' => $this->faker->buildingNumber,
            'CEP' => $this->faker->randomNumber(8),
        ];
    }
}
