<?php

namespace Database\Factories;

use App\Models\Topik;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopikFactory extends Factory
{
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topik::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'topik_bidang' => $this->faker->text(100)
        ];
    }
}
