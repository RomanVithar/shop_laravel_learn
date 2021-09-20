<?php

namespace Database\Factories;

use App\Models\BasketsProducts;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class BasketsProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BasketsProducts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_basket' => $this->faker->numberBetween(1, 10),
            'id_product' => $this->faker->numberBetween(1, 10),
            'count' =>  $this->faker->randomDigit()
        ];
    }
}
