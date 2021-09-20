<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\ProductsDeals;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsDealsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductsDeals::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_deal' => $this->faker->numberBetween(1, 10),
            'id_product' => $this->faker->numberBetween(1,10),
            'count' =>  $this->faker->randomDigit()
        ];
    }
}
