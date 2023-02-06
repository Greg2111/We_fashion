<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->streetName(),
            "description"=>$this->faker->streetName(),
            "price"=>$this->faker->randomFloat([20,700]),
            "size"=>$this->faker->randomElement(['XS','S', 'M', 'L', 'XL']),
            'image'=>$this->faker->file('C:\Users\miste\OneDrive\Bureau\php2k23\We_Fashion_ressources\images\hommes', 'storage/app/public/images/hommes', true),
            "visibility"=>$this->faker->randomElement(['publié', 'non publié']),
            "status"=>$this->faker->randomElement(['standard', 'en solde']),
            "reference"=>$this->faker->imageUrl(640,480),
            "id_cat"=>$this->faker->randomElement(['1', '2'])
        ];
    }
}
