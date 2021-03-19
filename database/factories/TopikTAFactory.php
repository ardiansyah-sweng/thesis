<?php

namespace Database\Factories;

use App\Models\TopikTA;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopikTAFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TopikTA::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nipy_fk_nipy' => $this->faker->numerify('030'),
            'topik_bidang_fk_id' => $this->faker->numerify('5'),
            'judul_topik' => $this->faker->sentence,
            'deskripsi' => $this->faker->paragraph
        ];
    }
}
