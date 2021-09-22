<?php

namespace Database\Factories;

use App\Models\UsersProducts;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersProducts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'user_id' => [1, 4, 4, 4, 5],
            'user_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1, 10),
//            'product_id' => [1, 5, 7, 4, 3],
            'count' => $this->faker->randomDigit()
        ];
    }
}
