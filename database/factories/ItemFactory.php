<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantidade' => $this->faker->randomNumber(2),
            'produto_id' => Produto::factory()->create()->getKey(),
            'preco' => function (array $attributes) {
                return Produto::find($attributes['produto_id'])->preco * $attributes['quantidade'];
            }
        ];
    }
}
