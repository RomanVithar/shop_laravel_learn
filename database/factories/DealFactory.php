<?php

namespace Database\Factories;

use App\Models\Deal;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'cost_delivery' => $this->faker->numberBetween(1,100),
            'cost_type' => $this->faker->randomElement(['card', 'cash']),
            'status' => $this->faker->randomElement(['closed', 'open']),
            'cost' => $this->faker->numberBetween(10, 100),
        ];
    }
}
