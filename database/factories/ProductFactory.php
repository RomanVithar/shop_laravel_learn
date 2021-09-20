<?php

namespace Database\Factories;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'cost' => $this->faker->randomDigit(),
            'title' => $this->faker->randomAscii(),
            'weight' => $this->faker->randomDigit(),
            'dimension' => '[]',
            'image' => $this->faker->randomAscii()
        ];
    }
}