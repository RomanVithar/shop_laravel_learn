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
            'deal_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1,10),
            'count' =>  $this->faker->numberBetween(1, 10)
        ];
    }
}
