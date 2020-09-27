<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'marca' => $this->faker->word,
            'quantidade_em_estoque' => $this->faker->randomDigitNot(0),
            'peso' => $this->faker->randomFloat(2, 13, 5000),
            'preco' => $this->faker->randomFloat(2, 40, 5000),
            'preco_revenda' => $this->faker->randomFloat(2, 30,5000)
        ];
    }
}
