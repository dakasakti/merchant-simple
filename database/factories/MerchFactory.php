<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MerchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul'     => $this->faker->sentence(3),
            'penulis'   => $this->faker->name(),
            'kategori'  => $this->faker->sentence(3),
            'review'    => $this->faker->Paragraph(6)
        ];
    }
}
